<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang=''>
<head>
   <?php include("includeScripts.php"); ?>
</head>
<body>
<?php include("includeHeader.php");?>
<div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='index.php'><span>Home</span></a></li>
   <li><a href='login.php'><span>Login</span></a></li>
   <li class="active"><a href='registration.php'><span>Registration</span></a></li>
</ul>
</div>
<div id="main">
  <!-- ---------------------------------Code Here--------------------------------- -->
  <center>
  <h2>Student Registration</h2>
	<form action="registrationdetails.php" onsubmit="return validatation();" method="post">
	    	<table>
	    		<tr>
	    			<td>Name</td><td><input type="text" name="student_name" id="student_name" /></td>	
	    		</tr>
	    		<tr>
	    			<td>Password</td><td><input type="password" name="student_pwd" id="student_name" /></td>	
	    		</tr>
	    		<tr>
	    			<td>USN</td><td><input type="text" name="usn" id="usn" /></td>	
	    		</tr>
	    		<tr>
	    			<td>Mobile</td><td><input type="text" name="mobile" id="mobile" /></td>	
	    		</tr>
	    		<tr>
	    			<td>Email-Id</td><td><input type="text" name="email" id="email" /></td>	
	    		</tr>
	    		<tr>
	    		<td><input type="submit"  value="Register"/></td><td><input type="reset"  value="Clear"/></td>
	    		</tr>
	    	</table>
	    	
	    </form>
	</center>
  <!-- ---------------------------------Code Here--------------------------------- -->
</div>
<?php include("includeFooter.php"); ?>
</body>
</html>