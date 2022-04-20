<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Palette+Mosaic&display=swap" rel="stylesheet">
  <title>RMS</title>
</head>
<body>
  <div class="header">
    <div class="up">
      <h1>Welcome to Result Management System</h1>
    </div>
    <div class="down">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="logo"></a>
      </div>
      <ul class="logo-area">
        <li> <a href="index.php">Home</a></li>
        <li> <a href="notice.php">Notice Board</a></li>
        <li> <a href="about.php">About</a></li>
        <li> <a href="login.php">LogIn</a></li>
      </ul>
    </div>
  </div>

  <div class="main">
    <form action="studentinfo.php" class="signup-info" method="post">
      <input type="text" name="name" placeholder="Your name" required>
      <br>
      <input type="number" name="classid" placeholder="Class ID" required min="1505001" max="1505040">
      <br>
      <input type="email" name="email" placeholder="Email" required>
      <br>
      <input type="password" name="password" placeholder="Password" required>
      <br>
      <button>SignUp</button>
    </form>
  </div>

  <div class="footer">
    <h2>Contact Us:</h2>
    <ul class="footer-icons">
      <li><a href="#"><img src="images/facebook.png" alt="fb"></a></li>
      <li><a href="#"><img src="images/Gmail.png" alt="gmail"></a></li>
      <li><a href="#"><img src="images/linkedin.png" alt="linkedin"></a></li>
    </ul>
  </div>

  <div class="success">
    sign up successful.
  </div>

</body>
</html>