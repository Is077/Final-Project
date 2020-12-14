<?php
include_once 'functions.php';
$result = mysqli_query($connection,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" type="text/css" href="css/style2.css">
 <link rel="stylesheet" type="text/css" href="css/list.css">
 </head>
<body>
<h2> Class List</h2>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<a href= "Management.php"><p style="text-align:right">Back</a>
  <table>
  
  <tr>
    <td>Student ID</td>
    <td>First Name</td>
    <td>Last Name</td>
  </tr>
<?php
//Initialize
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["student_id"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
