<?php
include_once 'functions.php';
$result = mysqli_query($connection,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/table.css">
 <link rel="stylesheet" type="text/css" href="css/style2.css">
<title>Update Student data</title>
</head>


<body>
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
    <td>Remove</td>
    <td>Edit Student</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
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
    <td><a href="delete-process.php?student_id=<?php echo $row["student_id"]; ?>">Delete</a></td>
    <td><a href="update-process.php?student_id=<?php echo $row["student_id"]; ?>">Update</a></td>

</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>