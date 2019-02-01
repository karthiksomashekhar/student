<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
<meat charset ="utf-8"  />
   <?php include("includeScripts.php"); ?>
   <link rel="stylesheet" href="css/loginstyle.css" type="text/css"/>
   
</head>
<body>
<?php include("includeHeader.php");?>
<div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='index.php'><span>Home</span></a></li>
   <li class="active"><a href='login.php'><span>Login</span></a></li>
   <li><a href='registration.php'><span>Registration</span></a></li>
</ul>
</div>
<div id="main">
<div id="container">
   <h1 align='center'>Login</h1><br>
  <!-- ---------------------------------Code Here--------------------------------- -->
  <center>
        <form action="logincheck.php" method="post" onsubmit="return validate();">
         
<p><label>User Name : </label>	<input id="name" type="text" name="student_name"  id="student_name"placeholder="Name" /></p><br>

<p><label>Password&nbsp;&nbsp; : </label> <input id="password" type="password" name="student_pwd" id="student_pwd"placeholder="Password" /></p><br>
	<p class="keeplogin"> 
					<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
					<label for="loginkeeping">Keep me logged in</label><br>
				</p><br>

 
	            <td> <input type="submit" value="Login" /></td>
	            <td><input type="reset" value="Reset" /></td>
            

			
        </form>
	</center>
  <!-- ---------------------------------Code Here--------------------------------- -->
</div>
<?php include("includeFooter.php"); ?>
</body>
</html>