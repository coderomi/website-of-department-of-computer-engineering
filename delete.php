<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function delet() {
			
var r = confirm("ARE YOU SURE WANT TO DELETE THIS DATA !");
if (r == 1) {
  alert("RECORD DELETED !");
} else {
  alert("RECORD NOT DELETED!");
}
		}
	</script>
</head>
<body  style="background-color: rgba(65,186,216,0.8)">

	<form method="POST">
	<table>
		<tr><th>ENTER EMAIL ID:<input type="text" name="email"></th></tr>
		<tr><th><input type="submit" name="submit" value="GET DATA"></th></tr>
	</table>
	</form>


<?php
if(isset($_POST['submit'])){
            $email = $_POST['email'];
           
           $query="SELECT * FROM stud_data where email='$email'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
?>
<br><br>

<?php 

if ($total!=0) {
    
    while ( $result= mysqli_fetch_assoc($data) ) { ?>
         
          <form action="" method="POST">      
            <section class="personalinfo"> 
                <table bordder="1px" cellspacing="5px" style="text-align: left">
                    <tr>
           <th> STUDENT'S NAME:</th> <td><input type="text" placeholder="FIRST NAME" autocomplete="off" id="sfn" name="sfn"value=" <?php echo $result['fname']?>"></td>
<td><input type="text" placeholder="MIDDLE NAME" id="smn" name="smn" value=" <?php echo $result['mname']?>"> </td>
<td><input type="text" placeholder="LAST NAME" id="sln" name="sln" value=" <?php echo $result['lname']?>"></td></tr>

    <tr>
        <th>FATHER'S NAME : </th><td> <input type="text" name="ffn"  placeholder="FIRST NAME" id="ffn" value=" <?php echo $result['faname']?>"></td>
    </tr>


            <tr>
        <th>MOTHER'S NAME:</th> <td><input type="text" name="mn"  placeholder="FIRST NAME" id="mn" value=" <?php echo $result['moname']?>" /></td>
        <th>DATE OF BIRTH :</th> <td> <input type="text" name="dob" id="db" value=" <?php echo $result['dob']?>"  /></td></tr>


        <tr>
            <th>GENDER :</th> <td><input type="text" name="gender" id="MALE" value=" <?php echo $result['gen']?>"/></td> 
        <th>CONTACT NO:</th> <td><input type="text" name="contactno"  id="cn" value=" <?php echo $result['cont']?>" /></td></tr>


        <tr>
        <th>ADDRESS :</th> <td><input type="text" name="address1"  placeholder="LINE 1" id="al1" value=" <?php echo $result['add1']?>" /></td>
        <td><input type="text" name="address2"  placeholder="LINE 2" id="al2" value=" <?php echo $result['add2']?>" /></td></tr>

        <tr>
        <th>TALUKA :</th> <td><input type="text" name="tal"  placeholder="TALUKA" id="tal" value=" <?php echo $result['tal']?>" /></td>
        <th>DISTRICT :</th> <td><input type="text" name="dist"  id="dist" value=" <?php echo $result['dist']?>" /></td></tr>

        <tr>
            <th>STATE:</th> <td><input type="text" name="state" placeholder="STATE" id="state" value=" <?php echo $result['state']?>" /></td>
        <th>PIN CODE:</th> <td><input type="text" name="pin" max="6" id="pin" value=" <?php echo $result['pin']?>" /></td></tr>

        <tr>
        <th>BLOOD GROUP :</th> <td><input type="text" name="bg" placeholder="bg" id="bg" value=" <?php echo $result['blood']?>" /></td>
        <th>E-Mail :</th> <td><input type="email" name="email"  id="email"  value=" <?php echo $result['email']?>"/></td>
    </tr>
    </table>
</section>
  <br>

        
         <section class="eduinfo"> 
        <table style="text-align: left">
            <tr>
        <th>H.S.C MARKS (In %):</th> <td><input type="text" name="marks" id="marks" value=" <?php echo $result['hsc']?>" /></td></tr>

        <tr>
        <th>NAME OF SCHOOL/ COLLEGE :</th> <td><input type="text" name="nsc" id="nsc"  value=" <?php echo $result['school']?>" /></td></tr>
        </table>
        </section>
            <br>
              <section class="documents">
        <table style="text-align: left">
            <tr>
        <th style="text-align: left">AADHAR NO :</th> <td><input type="text" name="adhar" id="adhar" value=" <?php echo $result['adhar']?>"  /></td></tr>
        <tr><th>PAN CARD : </th> <td><input type="text" name="pan" id="pan" value=" <?php echo $result['pan']?>" /></td></tr>
        
    </table>
                 
    </section>  
    </form>
        
    <?php }
    //echo "records";
}
else{
    echo "no records";
}}
?>
<form method="POST" onclick="return delet()">
	<input type="submit" name="delete" value="DELETE RECORD">
</form>

<?php
if(isset($_POST['delete'] ))
$email = $_POST['email'];

	$query = "DELETE FROM stud_data WHERE email = '$email' ";
	$data = mysqli_query($conn,$query);

	if($data)
	{
		 
	}
	else{
		echo "failed";
	}
?>
</body>
</html>
