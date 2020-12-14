<?php
include_once 'functions.php';
$sql = "DELETE FROM student WHERE student_id='" . $_GET["student_id"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>
