<?php
include("connection.php");
error_reporting();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.body{ background-color: rgba(65,186,216,0.8);
		}
		.box{
	margin-left: 20px;
	
	padding-top: 5px;
	padding-bottom: 5px;
	padding-right: 5px;
	width: 600px;

}
.submit{
	width: 90px;
	height: 30px;
	color: green;
	font-weight: bold;
	size: 30px;
	
	border-radius: 5px;
}
		</style>
</head>
<body class="body">
	<form method="POST" >
		<div class="box">
		ENTER EMAIL :
		<input type="text" name="email" ><br><br>
		ENTER ASSIGNED ENROLMENT NUMBER:
		<input type="text" name="enrol">
		<input type="submit" name="submit" value="SUBMIT" class="submit">
		</div>
	</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{

	$email=$_POST['email'];
	$enrol=$_POST['enrol'];
	

	$query= " UPDATE stud_data SET enrol='$enrol' WHERE email='$email'";

	$data = mysqli_query($conn,$query);

	if($data){
		?>
		<script type="text/javascript">alert("ENROLMENT NUMBER ADDED SUCESSFULLY !")</script>
		<?PHP
			}
			else{
				?>
				<script type="text/javascript">alert("ERROR")</script><br><script type="text/javascript">alert("ENROLMENT NUMBER NOT UPDATED !")
			</script>
			<?PHP }
}

 ?>
