<?php
require_once('connection.php');
 
$taskID= $_POST['taskID'];
$start_date= $_POST['start_date'];
$deadline= $_POST['deadline'];
$task= $_POST['task'];
$status= $_POST['status'];
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tasktable SET 
    start_date= '$start_date',
    deadline= '$deadline',
    task= '$task',
    status= '$status'
WHERE taskID= $taskID";
 
$conn->exec($sql);
echo "<script>alert('Task Updated Successfully!'); window.location='index.php'</script>";
?>