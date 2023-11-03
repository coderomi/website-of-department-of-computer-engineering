<?php include('connection.php');
error_reporting("o");
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.bod{
			background-color: rgba(0,0,0,0.8);
		}
		p{
			color: white;
			font-size: 30px;
			background-color: rgba(41,168,201,1);
			text-align: center;
		}
		table{
			
			text-align: center;

		}
		.colorchange{
			color: rgba(213,0,106,1);
		}
		.colorchange:hover{
			color: white;
		}
	</style>
</head>
<body class="bod">
	<p class="colorchange"><a href="studentaccnt.php" class="colorchange" target="blank">DASHBOARD</a></p>
	<br><br><br>
	<table border=0px; color="white" width="100%" cellspacing="10">
		<th width="27%" style="color: white;opacity: 0.8;font-size: 23px;"  > OPERATIONS</th>
		<tr><td style="font-size: 16px;"><a href="show123.php" target="rightframe" class="colorchange">ALL STUDENT DETAILS</a></td></tr>
		<tr><td style="font-size: 18px;" ><a href="enrol.php" target="rightframe" class="colorchange"> ENROLMENT NUMBER </a></td></tr>
		<tr></tr>
	   <tr><td  style="font-size: 18px;"><a href="mydetails.php" target="rightframe" class="colorchange"> STUDENT DETAILS</a></td></tr>
	   <tr></tr>
		<tr><td  style="font-size: 18px;"><a href="addnewdata.php" target="rightframe" class="colorchange"> ADD NEW STUDENT </a></td></tr>
		<tr></tr>
		<tr><td style="font-size: 18px;" ><a href="delete.php" target="rightframe" class="colorchange"> DELETE RECORD </a></td></tr>
		<tr></tr>
		<tr><td style="font-size: 18px;" ><a href="marksupdate.php" target="rightframe" class="colorchange"> ADD STUDENT MARKS </a></td></tr>
		<tr><td style="font-size: 18px;" ><a href="viewfeed.php" target="rightframe" class="colorchange"> VIEW FEEDBACK </a></td></tr>
				<tr></tr>
		
	</table>

</body>
</html>

