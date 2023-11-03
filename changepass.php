<?php
include("connection.php");
error_reporting(0);
?>
    
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="changepass.css">
</head>
<body>
<form method="post">
	 <center><div class="di"> 
	ENTER YOUR EMAIL ID :
	<input type="text" name="email" id="email"><br><br>
	ENTER NEW PASSWORD :
	<input type="text" name="pwd" id="pwd"><br><br>
	<center><input type="submit" name="submit" value="SUBMIT" class="submi"></center>
</div>
</center>
</form>
</body>
</html>

<?php
  if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];

	$query = " UPDATE stud_data SET pass='$pwd' WHERE email='$email'";

	$data = mysqli_query($conn,$query);

	if($data){
		?>
		<script type="text/javascript">alert("YOUR PASSWORD HAD SUCESSFULLY CHANGED !")</script>
		<?PHP
			}
			else{
				?>
				<script type="text/javascript">alert("YOUR PASSWORD HAS NOT CHANGED")</script>
			<?PHP }
}

 ?>
