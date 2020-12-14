<?php 
    include 'login.php';
    //Check Username and email
    $UserName['Username'] = "";
    if (isset($_POST['Username'])) $UserName['Username'] = htmlspecialchars($_POST['Username']);
    $UserEmail['SignEmail'] = "";
    if (isset($_POST['SignEmail'])) $UserEmail['SignEmail'] = htmlspecialchars($_POST['SignEmail']);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-Up</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    </head>

    <body>
        <div class="sign-page">
        <img src="logo/complogo.png" alt="Company Logo" id="logo">
        <p align:right><h2>Sign Up</h2></p>
         <div class="form">
              <form id="sign-form" class="sign-form" method="POST" target="">
                <div class="form-fill">
                  <label for="Username">Username</label>
                  <input id="Username" name="Username" value="<?php echo $UserName['Username']; ?>" placeholder="Username" />
                  <span><p><?php if(isset($errors['validate_name'])) echo $errors['validate_name']; ?></p></span>
                  <br>
                </div>
                <div class="form-fill">
                  <label for="SignEmail">Email</label>
                  <input id="SignEmail" name="SignEmail" value="<?php echo $UserEmail['SignEmail']; ?>" placeholder="Email" />
                  <span><p><?php if(isset($errors['validate_email'])) echo $errors['validate_email']; ?></p></span>
                  <br>
                </div>
                <div class="form-fill">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" placeholder="password">
                  <span><p><?php if(isset($errors['validate_password'])) echo $errors['validate_password']; ?></p></span>
                  <br>
                </div>
                <div class="form-fill">
                  <label for="cpassword">Confirm Password</label>
                  <input type="password" id="cpassword" name="cpassword" placeholder="password">
                  <span><p><?php if(isset($errors['validate_cpassword'])) echo $errors['validate_cpassword']; ?></p></span>
                  <br>
                </div>
                <button class="submit-login" name="submit" onclick= "return SignUpValidation()">Sign Up</button>
              </form>
              <p style="text-align:center; font-weight:bold; color:black;">Already have an account?<a style="decoration:none; color:grey; float:right;"href = "index.php">Log In</a></p>
            </div>
          </div>
        <script src="js/index.js"></script>
    </body>
    
</html>