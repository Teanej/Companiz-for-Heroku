if (!location.hash) {
  location.hash = Math.floor(Math.random() * 0xffffff).toString(16)
}
const roomHash = location.hash.substring(1)

// TODO: Replace with your own channel ID
const drone = new ScaleDrone('2xmbUiTsqTzukyf7')
// Room name needs to be prefixed with 'observable-'
const roomName = 'observable-' + roomHash
const configuration = {
  iceServers: [
    {
      urls: 'stun:stun.l.google.com:19302',
    },
  ],
}
let room
let pc

function onSuccess() {}
function onError(error) {
  console.error(error)
}

drone.on('open', (error) => {
  if (error) {
    return console.error(error)
  }
  room = drone.subscribe(roomName)
  room.on('open', (error) => {
    if (error) {
      onError(error)
    }
  })
  // We're connected to the room and received an array of 'members'
  // connected to the room (including us). Signaling server is ready.
  room.on('members', (members) => {
    console.log('MEMBERS', members)
    // If we are the second user to connect to the room we will be creating the offer
    const isOfferer = members.length === 2
    startWebRTC(isOfferer)
  })
})

// Send signaling data via Scaledrone
function sendMessage(message) {
  drone.publish({
    room: roomName,
    message,
  })
}
