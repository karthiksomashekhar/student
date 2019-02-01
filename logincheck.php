<?php 
session_start();
require_once("database.php");
$student_name=$_POST["student_name"];
$student_pwd=$_POST["student_pwd"];
$sql="select * from student where student_name='$student_name' and student_pwd='$student_pwd'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
	{
		
		$usn=$row['usn'];
		$student_name=$row['student_name'];
	}
$count=mysql_num_rows($result);

if($count>0)
{
	$_SESSION[usn]=$usn;
    $_SESSION[student_name]=$student_name;
	header("location:home.php?status=Login success");
}
else
{
	header("location:login.php?status=login Failure");
}

?>
