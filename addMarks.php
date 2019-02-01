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
   <li class=' has-sub'><a href='home.php'><span>Home</span></a></li>
   <li class="active"><a href='addMarks.php'><span>Add Marks</span></a></li>   
   <li><a href='viewMarks.php'><span>View Marks</span></a></li>
   <li><a href='login.php'><span>Logout</span></a></li>   
</ul>
</div>
<div id="main">
  <!-- ---------------------------------Code Here--------------------------------- -->
  
	 <?php 
	$usn = $_SESSION['usn'];
	$student_name=$_SESSION['student_name'];
?>
<p style="font-size:large;text-align:left;color:red;font-weight:bold;">Welcome <?php echo $student_name;?></p>
<center>
<form method="post" action="addMarksDetails.php" >
	<fieldset style="width:50%;">
	<legend style="font-size:xx-large;text-align:left;color:red;font-weight:bold;">Add Marks</legend>
		<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" value="<?php echo $student_name; ?>"/></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" value="<?php echo $usn; ?>"/></td>
			</tr>	
			<tr>
				<td>Semester</td><td><select  name="semester" id="semester">
						  	<option value="">==Select semester==</option>
						  	<option value="1">1</option>
						  	<option value="2">2</option>
						  	<option value="3">3</option>
						  	<option value="4">4</option>
						  	<option value="5">5</option>
						  	<option value="6">6</option>
						  </select></td>
			</tr>	
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
	</fieldset>
</form>		
	</center>
  <!-- ---------------------------------Code Here--------------------------------- -->
</div>
<?php include("includeFooter.php"); ?>
</body>
</html>