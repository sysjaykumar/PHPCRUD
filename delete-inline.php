<?php
	echo $stu_id = $_GET['id'];
	include 'config.php';
    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result =  mysqli_query($myconn, $sql)or die("Query Unsuccesfull.");
    header("Location: http://localhost/crud/index.php");
    mysqli_close($myconn);
?>