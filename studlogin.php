<?php
include("connection.php");
error_reporting();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME PAGE</title>
	 <link rel="stylesheet" type="text/css" href="studlogin.css">
</head>
<body background="imgs\back.jpg">
	<header class="header">
        <img src="imgs\clglogo.png" class="clglogo"  height="150px" width="100%" ><br />
    </header>

<ul>
			<b>
			<a href="index.html"><li>HOME </li></a>
			<a href="aboutus.html"><li>ABOUT COLLEGE </li></a>
			<a href="ce.html"><li>COMPUTER ENGINEERING </li></a>
			<a href="gallery.html"><li>GALLERY </li></a>
			<a href="studreg.php"><li>STUDENT REGISTRATION </li></a>
		
			</b>
			
			
		</ul><br><br><br>
		<section class="heading">STUDENT LOGIN</section>
		<form method="post" >
		<section class="lgd">	
		<table>
			<tr>
		<td style="color: white;font-size: 20;font-weight: bold;text-align: center;">ENTER EMAIL ID:<td></style> <input type="text" name="email">
		</tr>
		<tr>
		<td style="color: white;font-size: 20;font-weight: bold;text-align: center;margin-bottom: 30px;">ENTER PASSWORD:<td> <input type="PASSWORD" name="pass"><br>
		</tr>	<tr></tr><tr></tr><tr></tr>
		<td><input type="submit" name="submit" value="SUBMIT" class="button">
		
		</tr></table>
		<br></center>
	</section>
	</form>

<footer>
	<h2>CONTACT US:</h2>
		<section class="fa">
		E-MAIL ID:<a href="mailto:ybpolytechnic@gmail.com " style="color:white;">ybpolytechnic@gmail.com</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		CONTACT NO.:(02363) 273535, 273456
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 ADDRESS:Vazarwadi, Charathe, Sawantwadi – 
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;416510,Tal – Sawantwadi, Dist -
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sindhudurg,   Maharashtra, India.
		<br>
		<hr color="red" width="800px">
		<center>ALL RIGHTS RESERVED WITH HEAD OF DEPARTMENT.</center>
		</section>

</footer>
</body>
</html>


<?php

if(isset($_POST['submit']))
{
	$regno = $_POST['email'];
	$pwd = $_POST['pass'];

	$query = "SELECT * FROM stud_data WHERE email = '$regno' && pass = '$pwd'";
	
	$data = mysqli_query($conn,$query);

	$total =  mysqli_num_rows($data);
	
	if($total == 0)
	{
			?>
		
		<script> alert("LOGIN FAIL !") </script><?PHP
	}
	else{
	
		 echo"LOGIN OK";?>
		
		<script> location.replace("studentaccnt.php"); </script><?PHP
	}
	
	
}
?>