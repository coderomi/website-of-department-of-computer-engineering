<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		body{
			background-color: rgba(65,186,216,0.8);
		}
		.pay{
			border: 1px solid white;
			width: 500px;
			height: 50px;
			font-size: 30px;
			color: white;
			background-color: rgba(140, 70, 70, 0.9);
			border-radius: 10px;
			margin-top: 8px;
			padding-top: 10px;
			
		}
		.box{
			border: 2px dashed white;
			width: 700px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-top: 18px;
			font-size: 18px;
			color:;
			font-weight: bolder;
		}
		.edit{
			border: 1px solid;
			border-top: 2px solid;
			border-left: 2px solid;
		}
		.submit{
			font-size: 15px;
			font-weight: bold;
		margin-left: 520px;
			margin-top: 15px;
			background-color: white;
			color: green;
		}
		.submit:hover{
			background-color: rgba(255, 202, 179, 1);
		}
	</style>
	<script type="text/javascript">
		function valid() {
			
			var	enrol=document.getElementById('enrol').value;
			var name=document.getElementById('name').value;
			var	amount=document.getElementById('amount').value;
			var date=document.getElementById('date').value;

			if(enrol==""){
				alert("PLEASE ENTER ENROLMENT NUMBER");
				return false;
			}
			if(name==""){
				alert("PLEASE ENTER NAME");
				return false;
			}
			if(amount==""){
				alert("PLEASE ENTER AMOUNT");
				return false;
			}
			if(date==""){
				alert("PLEASE ENTER DATE");
				return false;
			}

			
		}
	</script>
</head>
<body>
	<form method="post" target="blank"  onsubmit="return valid()"><center><div class="pay"><center><u>PAY YOUR FEES</u></center></div></center>
		<center><div class="box"><center>
			<table>
		<tr>
			<th>ENTER ENROLMENT NO:</th>
		<td><input type="text" name="enrol" id="enrol" class="edit"></td>
	</tr><tr></tr><tr>
		<th>ENTER YOUR NAME:</th>
		<td><input type="text" name="name" id="name" class="edit"></td>
	</tr><tr></tr><tr>
		<th>ENTER FEE AMOUNT :</th>
		<td><input type="text" name="amount" id="amount" class="edit"></td>
	</tr><tr></tr><tr>
		<th>ENTER PAYMENT DATE:</th>
		<td><input type="date" name="date" id="date" class="edit"></td></tr>
		</table>
		<input type="submit" name="submit" value="PROCEED TO PAY" class="submit" > </div>
</center>
	</form>

</body>
</html>
<?php
    if(isset($_POST['submit']))
    {

    $enrol=$_POST['enrol'];
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $date=$_POST['date'];
   
   	$insertquery = "INSERT INTO `fee`(`enrol`, `name`, `amount`, `date`) VALUES ('$enrol','$name','$amount','$date')";

   	 $res = mysqli_query($conn,$insertquery);
         if($res){ 
         			?>
         			<script type="text/javascript">
                 location.replace("https://pages.razorpay.com/pl_ICGFh5IHsxR0Qx/view");  
                </script>
             }
            else{
                ?>
               <script type="text/javascript">alert(" ERROR !"<br>"CANNOT PORCEED TO PAYMENT.")</script> ;
               <?php
            
            }
              
}
?>