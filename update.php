<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
$year = $_POST['year'];
$month = $_POST['month'];
$date = $_POST['date'];
$mon = $_POST['mon'];
$tue = $_POST['tue'];
$wed = $_POST['wed'];



$sql="UPDATE syllabus SET 
 year = '$year',
 month = '$month',
 date = '$date',
 mon = '$mon',
 tue = '$tue',
 wed = '$wed' 
 WHERE id =$id;";

if ($conn->query($sql) === TRUE) {
    echo "<span class=\"btn btn-success\">Record updated successfully </span>";
  } else {
    echo "Error updating record: " . $conn->error;
  }

$conn->close();


?>

