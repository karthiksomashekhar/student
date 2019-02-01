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
   <li  class="active"><a href='addMarks.php'><span>Add Marks</span></a></li>   
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
<p style="font-size:large;text-align:left;color:grey;font-weight:bold;">Welcome <?php echo $student_name;?></p>
<center>
<form method="post" action="addMarksDetailsSave.php" >
<?php
$name=$_POST["name"];
$usn=$_POST["usn"];
$semester=$_POST["semester"];
?>
	<fieldset style="width:50%;">
	<legend style="font-size:xx-large;text-align:left;color:gray;font-weight:bold;">Enter Marks</legend>
	<?php if($semester=='1'){ ?>		
		<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" id="usn" value="<?php echo $usn; ?>" /></td>
			</tr>
			<tr>
				<td>Semester</td><td><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" />
			<tr>
				<td><input type="text" name="sub1" value="13MCA11"/></td><td><input type="text" name="marks1"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub2" value="13MCA12"/></td><td><input type="text" name="marks2" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub3" value="13MCA13"/></td><td><input type="text" name="marks3"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub4" value="13MCA14"/></td><td><input type="text" name="marks4" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub5" value="13MCA15"/></td><td><input type="text" name="marks5"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub6" value="13MCA16"/></td><td><input type="text" name="marks6" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub7" value="13MCA17"/></td><td><input type="text" name="marks7"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub8" value="13MCA18"/></td><td><input type="text" name="marks8" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
		<?php }else if($semester=='2'){?>
			<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" id="usn" value="<?php echo $usn; ?>" /></td>
			</tr>
			<tr>
				<td>Semester</td><td><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" />
			<tr>
				<td><input type="text" name="sub1" value="13MCA21"/></td><td><input type="text" name="marks1"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub2" value="13MCA22"/></td><td><input type="text" name="marks2" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub3" value="13MCA23"/></td><td><input type="text" name="marks3"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub4" value="13MCA24"/></td><td><input type="text" name="marks4" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub5" value="13MCA25"/></td><td><input type="text" name="marks5"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub6" value="13MCA26"/></td><td><input type="text" name="marks6" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub7" value="13MCA27"/></td><td><input type="text" name="marks7"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub8" value="13MCA28"/></td><td><input type="text" name="marks8" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
		<?php }else if($semester=='3'){?>
			<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" id="usn" value="<?php echo $usn; ?>" /></td>
			</tr>
			<tr>
				<td>Semester</td><td><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" />
			<tr>
				<td><input type="text" name="sub1" value="13MCA31"/></td><td><input type="text" name="marks1"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub2" value="13MCA32"/></td><td><input type="text" name="marks2" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub3" value="13MCA33"/></td><td><input type="text" name="marks3"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub4" value="13MCA34"/></td><td><input type="text" name="marks4" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub5" value="13MCA35"/></td><td><input type="text" name="marks5"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub6" value="13MCA36"/></td><td><input type="text" name="marks6" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub7" value="13MCA37"/></td><td><input type="text" name="marks7"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub8" value="13MCA38"/></td><td><input type="text" name="marks8" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
		<?php }else if($semester=='4'){?>
			<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" id="usn" value="<?php echo $usn; ?>" /></td>
			</tr>
			<tr>
				<td>Semester</td><td><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" />
			<tr>
				<td><input type="text" name="sub1" value="13MCA41"/></td><td><input type="text" name="marks1"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub2" value="13MCA42"/></td><td><input type="text" name="marks2" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub3" value="13MCA43"/></td><td><input type="text" name="marks3"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub4" value="13MCA44"/></td><td><input type="text" name="marks4" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub5" value="13MCA45"/></td><td><input type="text" name="marks5"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub6" value="13MCA46"/></td><td><input type="text" name="marks6" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub7" value="13MCA47"/></td><td><input type="text" name="marks7"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub8" value="13MCA48"/></td><td><input type="text" name="marks8" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
		<?php }else if($semester=='5'){?>
			<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" id="usn" value="<?php echo $usn; ?>" /></td>
			</tr>
			<tr>
				<td>Semester</td><td><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" />
			<tr>
				<td><input type="text" name="sub1" value="13MCA51"/></td><td><input type="text" name="marks1"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub2" value="13MCA52"/></td><td><input type="text" name="marks2" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub3" value="13MCA53"/></td><td><input type="text" name="marks3"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub4" value="13MCA54"/></td><td><input type="text" name="marks4" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub5" value="13MCA55"/></td><td><input type="text" name="marks5"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub6" value="13MCA56"/></td><td><input type="text" name="marks6" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub7" value="13MCA57"/></td><td><input type="text" name="marks7"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub8" value="13MCA58"/></td><td><input type="text" name="marks8" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
		<?php }else if($semester=='6'){?>
			<table>
			<tr>
				<td>Name</td><td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
			</tr>
			<tr>
				<td>USN</td><td><input type="text" name="usn" id="usn" value="<?php echo $usn; ?>" /></td>
			</tr>
			<tr>
				<td>Semester</td><td><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" />
			<tr>
				<td><input type="text" name="sub1" value="13MCA61"/></td><td><input type="text" name="marks1"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub2" value="13MCA61"/></td><td><input type="text" name="marks2" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub3" value="13MCA61"/></td><td><input type="text" name="marks3"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub4" value="13MCA61"/></td><td><input type="text" name="marks4" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub5" value="13MCA61"/></td><td><input type="text" name="marks5"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub6" value="13MCA61"/></td><td><input type="text" name="marks6" /></td>
			</tr>
			<tr>
				<td><input type="text" name="sub7" value="13MCA61"/></td><td><input type="text" name="marks7"/></td>
			</tr>
			<tr>
				<td><input type="text" name="sub8" value="13MCA61"/></td><td><input type="text" name="marks8" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Add Marks"/></td><td><input type="reset" /></td>
			</tr>
		</table>
			<?php } ?>
	</fieldset>
</form>		
	</center>
  <!-- ---------------------------------Code Here--------------------------------- -->
</div>
<?php include("includeFooter.php"); ?>
</body>
</html>