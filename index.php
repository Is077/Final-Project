<?php 
    ##include 'login.php';
    $UserEmail['Email'] = "";
    if (isset($_POST['Email'])) $UserEmail['Email'] = htmlspecialchars($_POST['Email']);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    </head>

    <body>
        <div class="login-page">
          <img src="logo/complogo.png" alt="Company Logo" id="logo">
          <p class="long-text"><b><h2>Where Learning in Fun!</h2></b></p>
           <div class="form">
              <form id="login-form" class="login-form" method="POST" target="">
                <div class="form-fill">
                  <p style="color: red; font-size:12px;"><?php if(isset($errorss['validate_mail'])) echo $errorss['validate_mail']; ?></p>
                  <p style="color: red; font-size:12px;"><?php if(isset($errorss['validate_pass'])) echo $errorss['validate_pass']; ?></p>
                  <p style="color: red; font-size:12px;"><?php if(isset($errorss['validate'])) echo $errorss['validate']; ?></p>
                  <label for="Fullname">Email</label>
                  <input id="Email" name="Email" value="<?php echo $UserEmail['Email']; ?>" placeholder="Email" />
                  <small>Error Message</small>
                  <br>
                  <br>
                </div>
                <div class="form-fill">
                  <label for="Fullname">Password</label>
                  <input type="password" id="password" name="password" placeholder="password">
                  <small >Error Message</small>
                  <br>
                  <br>
                </div>
                <button style="margin-bottom:15px;" class="submit-login" name="login" onclick= "return LoginValidation()">Login</button>
              </form>
              <a style="decoration:none; font-size:15px; color:black;"href = "register.php">Create Account</a>
            </div>
          </div>
        <script src="js/index.js"></script>
    </body>
    
</html>
