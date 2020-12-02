<?php

session_start();

$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "TO2022";
$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);

$errorss = array();

$errors = array();

if(isset($_POST['submit'])){
    
    $users_name = $_POST['Username'];
    $user_email = $_POST['SignEmail'];
    $user_password =$_POST['password'];
    $password = password_hash($user_password,PASSWORD_BCRYPT,array("cost"=>12));
    $user_cpassword =$_POST['cpassword'];

    $regex_ashesi_email = '/^[a-z]+\.[a-z]+@ashesi\.edu\.gh$/';
    
    $username_query = "SELECT * FROM login WHERE users_name='$users_name'";
    $usernameCount_result = mysqli_query($connection, $username_query);

 
    $usermail_query = "SELECT * FROM login WHERE user_email='$user_email'";
    $usermailCount_result = mysqli_query($connection, $usermail_query);

    if (empty($users_name)){
        $errors['validate_name'] = "Invalid Username";
    } else if(mysqli_num_rows($usernameCount_result)>0) {
        $errors['validate_name'] = "Username already exists";
    }
