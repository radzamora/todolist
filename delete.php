<?php
require_once('connection.php');
 
$taskID= $_POST['taskID'];
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "DELETE from tasktable where taskID = '$taskID'";
 
$conn->exec($sql);
echo "<script>alert('Task DELETED successfully!'); window.location='index.php'</script>";
?>