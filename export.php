<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<table><tr>
		
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
		$query="SELECT * FROM stud_data";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo  " TOTAL ENTRIES :"  . "" .$total;?>
<br><br>

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
	}}

		header('Content-Type:application/xls');
		header('Content-Disposition:attachment;filename=studentdata.xls');
		echo $html;
?>
</body>
</html>