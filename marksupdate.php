<?php
include("connection.php");
error_reporting();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		.body{ background-color: rgba(65,186,216,0.8);
	}
.mail{
	border: 0px solid white;
	margin-top: 8px;
	margin-left: 5px;
	width: 500px;
	font-weight: bold;
	height: 30px;
	margin-bottom: 10px;
}
.box{
	margin-left: 20px;
	
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 5px;
	width: 500px;

}
.submit{
	width: 90px;
	height: 37px;
	color: green;
	font-weight: bold;
	size: 30px;
	margin-left: 385px;
	border-radius: 5px;
}



	</style>
</head>
<body class="body">
	<form method="post">
		<div class="mail">ENTER ENROLMENT NUMBER :
		<input type="text" name="enrol" id="enrol"><br><br><br></div>
		<section style="color: red; font-weight: bold;"><sup>*</sup>Enter N.A if student is not applicable for the semester.</section><br>

		<div class="box">
		ENTER SEMESTER 1 PERCENTAGE :
		<input type="text" name="sem1">&nbsp;&nbsp;&nbsp;&nbsp; <br><br>
 
		ENTER SEMESTER 2 PERCENTAGE :
		<input type="text" name="sem2">&nbsp;&nbsp;&nbsp;&nbsp; <br><br>

		ENTER SEMESTER 3 PERCENTAGE :
		<input type="text" name="sem3">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
 
		ENTER SEMESTER 4 PERCENTAGE :
		<input type="text" name="sem4">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

		ENTER SEMESTER 5 PERCENTAGE :
		<input type="text" name="sem5">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

		ENTER SEMESTER 6 PERCENTAGE :
		<input type="text" name="sem6">&nbsp;&nbsp;&nbsp;&nbsp; <br><br></div>

		<input type="submit" name="submit" value="SUBMIT" class="submit">



		
	</form>

</body>
</html>
<?php
if(isset($_POST['submit']))
{

	$enrol=$_POST['enrol'];
	$sem1=$_POST['sem1'];
	$sem2=$_POST['sem2'];
	$sem3=$_POST['sem3'];
	$sem4=$_POST['sem4'];
	$sem5=$_POST['sem5'];
	$sem6=$_POST['sem6'];

	$query= " UPDATE stud_data SET sem1='$sem1',sem2='$sem2',sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6' WHERE enrol='$enrol'";

	$data = mysqli_query($conn,$query);

	if($data){
		?>
		<script type="text/javascript">alert("PERCENTAGE SUCESSULLY ADDED !")</script>
		<?PHP
			}
			else{
				?>
				<script type="text/javascript">alert("ERROR")</script><br><script type="text/javascript">alert("PERCENTAGE NOT ADDED !")
			</script>
			<?PHP }
}

 ?>
