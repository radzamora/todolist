<?php
require_once('connection.php');
 
$start_date= $_POST['start_date'];
$deadline= $_POST['deadline'];
$task= $_POST['task'];
$status= $_POST['status'];
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tasktable (start_date, deadline, task, status)
VALUES ('$start_date', '$deadline', '$task', '$status')";
 
$conn->exec($sql);
echo "<script>alert('Task Successfully Added!'); window.location='index.php'</script>";
?>