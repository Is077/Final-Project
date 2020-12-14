<?php
include_once 'functions.php';
if(count($_POST)>0) {
mysqli_query($connection,"UPDATE student set student_id='" . $_POST['student_id'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', age='" . $_POST['age'] . "' ,gender='" . $_POST['gender'] . "' WHERE student_id='" . $_POST['student_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM student WHERE student_id='" . $_GET['student_id'] . "'");
$row= mysqli_fetch_array($result);
?>


<html>
<head>
   <title>Update Student Data</title>
   <link rel="stylesheet" type="text/css" href="css/styleform.css">
</head>

<body>
    <h2>Update Details</h2>
    <form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
    </div>
    <div style="padding-bottom:5px;">
    <a href="retrieve.php">Attendace Log</a>
    <a href="list.php">Class List</a>
    </div>

 
 Student Id: <br>
 <input type="hidden" name="student_id" class="txtField" value="<?php echo $row['student_id']; ?>">
 <input type="text" name="student_id"  value="<?php echo $row['student_id']; ?>">
 <br>
 First Name: <br>
 <input type="text" name="fname" class="txtField" value="<?php echo $row['fname']; ?>">
 <br>
 Last Name :<br>
 <input type="text" name="lname" class="txtField" value="<?php echo $row['lname']; ?>">
 <br>
 Age:<br>
 <input type="text" name="age" class="txtField" value="<?php echo $row['age']; ?>">
 <br>
 Gender:<br>
 <input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
 <br>
 <input type="submit" name="submit" value="Submit" class="buttom">

 </form>
</body>
</html>