<?php

session_start();

$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "finaldb";
$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);

$errorss = array();

$errors = array();

if(isset($_POST['submit'])){
    
    $users_name = $_POST['Username'];
    $user_email = $_POST['SignEmail'];
    $user_password =$_POST['password'];
    $password = password_hash($user_password,PASSWORD_BCRYPT,array("cost"=>12));
    $user_cpassword =$_POST['cpassword'];

    $regex_ashesi_email = '/^[^@]+@[^@]+\.[^@]+$/';
    
    $username_query = "SELECT * FROM login WHERE users_name='$users_name'";
    $usernameCount_result = mysqli_query($connection, $username_query);

 
    $usermail_query = "SELECT * FROM login WHERE user_email='$user_email'";
    $usermailCount_result = mysqli_query($connection, $usermail_query);

    if (empty($users_name)){
        $errors['validate_name'] = "Invalid Username";
    } else if(mysqli_num_rows($usernameCount_result)>0) {
        $errors['validate_name'] = "Username already exists";
    }


        
    if(!preg_match($regex_ashesi_email,$user_email)) {
        $errors['validate_email'] = "Invalid Mail";
    } 
    
    else if(mysqli_num_rows($usermailCount_result)>0) {
        $errors['validate_email'] = "Email already exists";
    }

    if (empty($user_password)){
        $errors['validate_password'] = "Invalid Password";
    }

   if ($user_password !== $user_cpassword){
        $errors['validate_cpassword'] = "Password Does not Match";
    }

    if(count($errors)==0){
        $input_query = "INSERT INTO login(users_name,user_email,user_password) VALUES ('$users_name','$user_email','$password')";
        $result = mysqli_query($connection,$input_query);

        if($result){
            echo "<script>alert('Successfully Created Account'); location.href='index.php';</script> ";
        }else{
            echo "<script>alert('Failed to Create Account');</script>";
        }

    }

}

if(isset($_POST['login'])){
    
    $user_email = $_POST['Email'];
    $user_password =$_POST['password'];
    

    if (empty($user_email)){
        $errorss['validate_mail'] = "Invalid Email or Password";
    }

   elseif (empty($user_password)){
        $errorss['validate_password'] = "Invalid Password";
    }



    if(count($errors) == 0){
        $sql = "SELECT * FROM login WHERE user_email ='$user_email'";
        $result = mysqli_query($connection,$sql);
        if (mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $pass = password_verify($user_password,$row['user_password']);   
            if($pass){
                $_SESSION["logged_in"] = true;
                header("Location: home.php");
                


            } else{
                echo "<script>alert('Login Failure'); location.href='index.php';</script> ";
            } 
            
        } 
        else{
            $errorss['validate'] = "Details No Match";
        }


    }

}





if($connection) {
    return true;

} else{
    return false;
    mysqli_connect_error();
}



mysqli_close($connection);

?>