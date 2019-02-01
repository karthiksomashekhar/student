<?php

$name=$_POST['name'];
$usn=$_POST['usn']; 
$semester=$_POST['semester'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$sub6=$_POST['sub6'];
$sub7=$_POST['sub7'];
$sub8=$_POST['sub8'];
$marks1=$_POST['marks1'];
$marks2=$_POST['marks2'];
$marks3=$_POST['marks3'];
$marks4=$_POST['marks4'];
$marks5=$_POST['marks5'];
$marks6=$_POST['marks6'];
$marks7=$_POST['marks7'];
$marks8=$_POST['marks8'];

require_once("database.php");

$count=mysql_query("INSERT INTO marks(name,usn,semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,marks1,marks2,marks3,marks4,marks5,marks6,marks7,marks8) VALUES ('$name','$usn','$semester','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$marks1','$marks2','$marks3','$marks4','$marks5','$marks6','$marks7','$marks8')");


if($count){
  
    header("location:addMarks.php?status=Successfull");
}else
{
    header("location:addMarks.php?status=Failure");
}
?>
