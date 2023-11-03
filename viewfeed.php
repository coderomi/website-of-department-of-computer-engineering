<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<style type="text/css">
		.link{
			border: 1px solid black;
			font-size: 20px;
			padding-top: 5px;
			padding-right: 5px;
			padding-bottom: 5px;
			padding-left: 5px;
			float: right;
			margin-bottom:10px ;
			background-color: white;
			color: black;
			font-weight: bold;
			border-top: 3px solid;
			border-left: 3px solid;
			margin-right: 10px;
			
		}
		.link:hover{
			color: green;
		}
		h2{
			
			width: 300px;
		}
	</style>
</head>
<body>
	<form method="post">
	<button onclick="printpage()" style="float: right;width: 150px;height: 40px;font-weight: bold;font-size: 17px;
    padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px;border: 1px solid darkorange;background-color: black;color: white;border-top: 2px solid darkorange;border-left: 2px solid darkorange;margin-bottom: 10px;">PRINT FORM</button>
</form>
<div id="pp">
<table border="1"   style=" text-align: center; cellspacing: 2px;">
	<tr>
		
		<th> ENROLMENT NUMBER</th>
		<th>  NAME</th>
		<th>ACADEMIC YEAR</th>
		<th>EMAIL</th>
		<th>Overall content and design of the curriculum</th>
		<th>Maintenance of attendance record by teachers</th>
		<th>Laboratory facilities available in college</th>
		<th>Evaluation scheme designed for each of the course</th>
		<th>Availability of prescribed books/ reference books in library</th>
		<th>Guidance by teachers for overall personality development of student</th>
		<th>Cooperation from teachers, library staff and office staff</th>
		<th>Availability and Accessibility of teachers after lecture timing</th>
		
		

		
		
	</tr>
	
<?php
include("connection.php");
error_reporting(0);


$query="SELECT * FROM feedback";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);?><h2 ><?php
echo "   TOTAL ENTRIES :  " . "" .$total;?></h2>

	


<?php echo $result['regno'];

if ($total!=0) {
	
	while ( $result= mysqli_fetch_assoc($data) ) {
		echo "
		<tr>
		
		<td>".$result[enrol]."</th>
		<td>".$result[name]."</th>
		<td>".$result[year]."</th>
		<td>".$result[email]."</th>
		<td>".$result[content]."</th>
		<td>".$result[maintain]."</th>
		<td>".$result[lab]."</th>
		<td>".$result[evaluation]."</th>
		<td>".$result[books]."</th>
		<td>".$result[guide]."</th>
		<td>".$result[cooperation]."</th>
		<td>".$result[availability]."</th>
		
		
		
		</tr>
		";
	}
	//echo "records";
}
else{
	echo "no records";
}
?>

</table></div>

</body>
<script type="text/javascript">
    function printpage() {
   var back = document.body.innerHTML;
   var data = document.getElementById('pp').innerHTML;
    document.body.innerHTML = data;
   
        window.print();
        document.body.innerHTML = backup;
    }
</script>

</html>