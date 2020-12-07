<?php
include_once 'functions.php';
$result = mysqli_query($connection,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" type="text/css" href="css/table.css">
 <link rel="stylesheet" type="text/css" href="css/style2.css">
 </head>
<body>
<h2> Attendance Log</h2>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Student ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Age</td>
    <td>Gender</td>
    <td>Date</td>
    <td>Year</td>
    <td>Attendance</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["student_id"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["_date"]; ?></td>
    <td><?php echo $row["ygroup"]; ?></td>
    <td><input type="radio" id="present" name="attendance" value="P">
    <label for="present">Present</label>
    <input type="radio" id="absent" name="attendance" value="A">
    <label for="absent">Absent</label><br></td>
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