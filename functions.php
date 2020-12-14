<?php
session_start();
$servername="localhost";
$username="root";
$dbpassword="";
$dbname = "finaldb";
$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);

$errors = array();

if(isset($_POST['save'])){
    // Validate

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $_date = $_POST['_date'];
    $ygroup = $_POST['ygroup'];



  
    if(empty($fname)){
        $errors['Error_fname'] = "Name cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty'";
    } 
    
    if(empty($lname)){
        $errors['Error_lname'] = "Name cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty'";
    }
    
    if(empty($age)){
        $errors['Error_age'] = "Age cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty'";
    }

    if(empty($gender)){
        $errors['Error_gender'] = "Gender cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty'";
    }

    if(empty($_date)){
        $errors['Error_date'] = "Pick a date";
        $errors['Error_field'] = "Input Error: 'Date is empty'";
    }

    if(empty($ygroup)){
        $errors['Error_yg'] = "Year Group cannot be blank";
        $errors['Error_field'] = "Input Error: 'A Field is empty'";
    }


    
 //Error handling
    if(count($errors)==0){
        $sql = "INSERT INTO student (fname, lname, age, gender, _date, ygroup) VALUES ('$fname', '$lname', '$age', '$gender', '$_date', '$ygroup')";
        $data_inserted = mysqli_query($connection, $sql);
        if($data_inserted){
            echo "<script>alert('Successfully added a Student'); location.href='management.php';</script> ";
        } else{
            echo "<script>alert('Failed to add a Student');</script>";
        }
    }

     
    
}

 // Test connection
    if($connection) {
        return true;

    } else{
        return false;
        mysqli_connect_error();
    }



mysqli_close($connection);

?>