<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companiz Blog Post Editor</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
   
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
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script></head>
</head>
<body>
<style>
    body {
      padding: 8%;
    }
    #page {
    padding: 10px;
    max-width: 100%;
    line-height: 1.5;
    border-radius: 10px;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 2px #999;
}
* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: #302e2e;
        outline: none;
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
  </style>
 
<form method="GET" style="margin: auto;">
	
  <textarea cols="80" id="blog-content" name="blog-content" rows="10" >    </textarea>

  <script>
      CKEDITOR.replace( 'blog-content', {
          height: 260,
          width: 700,
      } );
  </script>
<button type="submit" id="submit">Submit</button>
<br>
<br>
<br>
<br>
<br>
<div id="page" style="padding: 10px;
  max-width: 100%;
  line-height: 1.5;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-shadow: 1px 1px 1px #999;
  width: 700px;
  margin: auto;
  font-family: 'Poppins';">
  <?php echo $_GET['blog-content']; ?>
  </div>
</form>
<br>
</body>
</html>