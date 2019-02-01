<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang=''>
<head>
   <?php include("includeScripts.php"); ?>
</head>
<body>
<?php include("includeHeader.php");?>
<div id='cssmenu'>
<ul>
   <li class='active  has-sub'><a href='home.php'><span>Home</span></a></li>
   <li><a href='addMarks.php'><span>Add Marks</span></a></li>   
   <li><a href='viewMarks.php'><span>View Marks</span></a></li>
   <li><a href='login.php'><span>Logout</span></a></li>   
</ul>
</div>
<div id="main">
  <!-- ---------------------------------Code Here--------------------------------- -->
  <center>
	 <?php 
	$usn = $_SESSION['usn'];
	$student_name=$_SESSION['student_name'];
?>
<p style="font-size:large;text-align:left;color:red;font-weight:bold;">Welcome <?php echo $student_name;?></p>

	</center>
  <!-- ---------------------------------Code Here--------------------------------- -->
</div>
<?php include("includeFooter.php"); ?>
</body>
</html>