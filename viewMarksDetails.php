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
   <li class='has-sub'><a href='home.php'><span>Home</span></a></li>
   <li><a href='addMarks.php'><span>Add Marks</span></a></li>   
   <li class="active"><a href='viewMarks.php'><span>View Marks</span></a></li>
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
<h1>View Marks Details</h1>
<table border="1" style="border:solid black;font-size:large;text-align:left;color:red;font-weight:bold;">
	<tr>
		<td>Name</td><td>USN</td><td>Semester</td><td>Sub1</td><td>Sub2</td><td>Sub3</td><td>Sub4</td><td>Sub5</td><td>Sub6</td><td>Sub7</td><td>Sub8</td><td>Marks1</td><td>Marks2</td><td>Marks3</td><td>Marks4</td><td>Marks5</td><td>Marks6</td><td>Marks7</td><td>Marks8</td>
	</tr>
	<tr>
	<?php
	$name=$_POST["name"];
	$usn=$_POST["usn"];
	$semester=$_POST["semester"];
	
	require_once("database.php");
	$result=mysql_query("SELECT * FROM marks where name='$name' and usn='$usn' and semester='$semester'");
	while($row=mysql_fetch_array($result))
	{
	$name=$row['name'];
	$usn=$row['usn']; 
	$semester=$row['semester'];
	$sub1=$row['sub1'];
	$sub2=$row['sub2'];
	$sub3=$row['sub3'];
	$sub4=$row['sub4'];
	$sub5=$row['sub5'];
	$sub6=$row['sub6'];
	$sub7=$row['sub7'];
	$sub8=$row['sub8'];
	$marks1=$row['marks1'];
	$marks2=$row['marks2'];
	$marks3=$row['marks3'];
	$marks4=$row['marks4'];
	$marks5=$row['marks5'];
	$marks6=$row['marks6'];
	$marks7=$row['marks7'];
	$marks8=$row['marks8'];
	?>
	<td><?php echo $name; ?></td>
	<td><?php echo $usn; ?></td>
	<td><?php echo $semester; ?></td>
	<td><?php echo $sub1; ?></td>
	<td><?php echo $sub2; ?></td>
	<td><?php echo $sub3; ?></td>
	<td><?php echo $sub4; ?></td>
	<td><?php echo $sub5; ?></td>
	<td><?php echo $sub6; ?></td>
	<td><?php echo $sub7; ?></td>
	<td><?php echo $sub8; ?></td>
	<td><?php echo $marks1; ?></td>
	<td><?php echo $marks2; ?></td>
	<td><?php echo $marks3; ?></td>
	<td><?php echo $marks4; ?></td>
	<td><?php echo $marks5; ?></td>
	<td><?php echo $marks6; ?></td>
	<td><?php echo $marks7; ?></td>
	<td><?php echo $marks8; ?></td>
	<?php } ?>
	</tr>
</table>
	</center>
  <!-- ---------------------------------Code Here--------------------------------- -->
</div>
<?php include("includeFooter.php"); ?>
</body>
</html>