


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="icon" href="image/logo.ico">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>

    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form action="loginSubmit.php" method="post">
        <h2>Login</h2>
        <div class="icons">
          <a href="#"  ><i class="far fa-address-book"></i></a>
          <a href="index.php"><i class="fas fa-home"></i></a>
          <a href="#"><i class="fas fa-question-circle"></i></a>
        </div>



        <input type="text" placeholder="Enter StudentID" name="uname" required>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit">Login</button>
        <p class="options">Not Registered? <a href="registerVoter.php">Create an Account</a></p>
      </form>
      <!--login form end-->
    </div>
    <!--form area end-->

  </body>
</html>