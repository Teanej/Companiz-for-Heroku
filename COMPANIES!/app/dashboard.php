<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companiz | Dashboard</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="/styles/login-style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
<style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: #302e2e;
        outline: none;
      }

      

      h2 {
        font-weight: 700;
        font-size: 44px;
        letter-spacing: -1px;
        margin: 15px;
      }

      .login {
        background: #fff;
        width: 750px;
        margin: auto;
        padding: 20px;
        height: 400px;
        border-radius: 10px;
        text-align: center;
      }

      input {
        font-size: 18px;
        padding: 10px;
        border-radius: 100px;
        border: 1.5px solid lightgrey;
        margin: 15px;
      }

      a,
      button {
        padding: 10px;
        border-radius: 100px;
        font-size: 18px;
        text-decoration: none;
        background: #4e69b9;
        color: #fff;
        margin: 15px;
        border: none;
      }
      .center {
          display: block;
          margin: auto;
          text-align:center;
      }
    </style>
    <h2>Welcome to your dashboard, <?php echo $_POST['username1']; ?> </h2>
    <br>
    <div class="center">

        <img src="../images/logo.png" alt="Companiz Logo" width="auto" height="150">
        <br>
        <br>
        <a href="companiz/company.html">Start Your Company</a>
        <br>
        <br>
        <a href="blog.php?blog-content= ">Create a Blog Post</a>
        <br>
        <br>
        <a href="meeting.html">Start a New Meeting</a>
        <br>
        <br>
        <a href="profile.html">Create A Public Profile</a>
        <br>
        <br>
        <br>
        <p>Tip: first create a public profile and then do all the rest</p>
    </div>
</body>
</html>