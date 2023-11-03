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

<table border="1"   style=" text-align: center; background-color: rgba(65,186,216,0.8" cellspacing="2px" id="pp" >
	<tr>
		
		<th> ENROLMENT NUMBER</th>
		<th> FIRST NAME</th>
		<th>MIDDLE NAME</th>
		<th>LAST NAME</th>
		<th>FATHER FIRST NAME</th>
		<th>MOTHERS NAME</th>
		<th>DATE OF BIRTH</th>
		<th>CONTACT NO.</th>
		<th>ADDRESS 1</th>
		<th>ADDRESS 2</th>
		<th>TALUKA</th>
		<th>DISTRICT</th>
		<th>STATE</th>
		<th>PIN CODE</th>
		<th>BLOOD GROUP</th>
		<th>EMAIL</th>
		
		<th>HSC MARKS</th>
		<th>COLLEGE NAME</th>
		<th>ADHAR CARD</th>
		<th>PAN CARD</th>
		<th>SEM 1</th>
		<th>SEM 2</th>
		<th>SEM 3</th>
		<th>SEM 4</th>
		<th>SEM 5</th>
		<th>SEM 6</th>
		

		
		
	</tr>
	
<?php
include("connection.php");
error_reporting(0);


$query="SELECT * FROM stud_data";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);?><h2 ><?php
echo "   TOTAL ENTRIES :  " . "" .$total;?></h2>

	<a href="export.php" class="link">PRINT SHEET</a>


<?php echo $result['regno'];

if ($total!=0) {
	
	while ( $result= mysqli_fetch_assoc($data) ) {
		echo "
		<tr>
		
		<td>".$result[enrol]."</th>
		<td>".$result[fname]."</th>
		<td>".$result[mname]."</th>
		<td>".$result[lname]."</th>
		<td>".$result[faname]."</th>
		<td>".$result[moname]."</th>
		<td>".$result[dob]."</th>
		<td>".$result[cont]."</th>
		<td>".$result[add1]."</th>
		<td>".$result[add2]."</th>
		<td>".$result[tal]."</th>
		<td>".$result[dist]."</th>
		<td>".$result[state]."</th>
		<td>".$result[pin]."</th>
		<td>".$result[blood]."</th>
		<td>".$result[email]."</th>
		<td>".$result[hsc]."</th>
		<td>".$result[school]."</th>
		<td>".$result[adhar]."</th>
		<td>".$result[pan]."</th>
		<td>".$result[sem1]."</th>
		<td>".$result[sem2]."</th>
		<td>".$result[sem3]."</th>
		<td>".$result[sem4]."</th>
		<td>".$result[sem5]."</th>
		<td>".$result[sem6]."</th>
		
		</tr>
		";
	}
	//echo "records";
}
else{
	echo "no records";
}
?>

</table>

</body>

</html>