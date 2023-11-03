<?php include('connection.php');
error_reporting("o");
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body style="background-color: rgba(255,128,0,0.7);">
	<table border="0px" width="100%" height="70px" cellspacing="5px">
		<tr>
			<th rowspan="2" style="font-size: 30px;color: rgba(0,102,204,1); text-align: center;" bgcolor="pink" width="35%">WELCOME ADMIN !</th>
			<td width="27%" ></td>
			<th ><a href="adminchangepass.php" target="rightframe" style="float: right; color: rgba(255,60,157,1);border: 0px solid blue;padding: 10px;background-color: rgba(255,255,255,0.8);font-weight: bolder;" onmouseover=" this.style.color='green'"; onmouseout="this.style.color='blue'">CHANGE PASSWORD</a></th>
			<th><a href="adminlogin.php" target="blank" style="float: right; color: rgba(255,60,157,1);border: 0px solid blue;padding: 10px;background-color: rgba(255,255,255,0.8);font-weight: bolder;" onmouseover=" this.style.color='green'"; onmouseout="this.style.color='blue'">LOGOUT</a> </th>
		</tr>
		<tr>
			
			</tr>
	</table>

</body>
</html>

