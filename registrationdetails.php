<?php

$student_name=$_POST['student_name'];
$student_pwd=$_POST['student_pwd'];
$usn=$_POST['usn']; 
$mobile=$_POST['mobile'];
$email=$_POST['email'];



//Database connection
require_once("database.php");

//mysql query to insert value to database
$count=mysql_query("INSERT INTO student(`student_name`,`student_pwd`,`usn`,`mobile`,`email_id`) VALUES ('$student_name','$student_pwd','$usn','$mobile','$email')");

//if value inserted successyully disply success message
if($count){
  
    header("location:registration.php?status=Successfull");
}else
{
//error message
    header("location:registration.php?status=Failure");
}
?>
