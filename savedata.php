<?php
 echo $stu_name = $_POST['sname'];
 echo $stu_address = $_POST['saddress'];
 echo $stu_class = $_POST['class'];
 echo $stu_phone = $_POST['sphone'];

 $myconn = mysqli_connect("localhost","root","","crud") or die("Connection Filed");
 $sql = "INSERT INTO student(sname,saddress,sclass,sphone)VALUE('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
 $result =  mysqli_query($myconn, $sql)or die("Query Unsuccesfull.");
 header("Location: http://localhost/crud/index.php ");

 mysql_close($myconn);
?>