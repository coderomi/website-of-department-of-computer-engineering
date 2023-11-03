<?php
include("connection.php");
error_reporting();
 
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
        .personalinfo{
            font-size: 20px;
        }
        .eduinfo{
                 font-size: 20px;
        }
        .documents{
                     font-size: 20px;
        }
    </style>
    
</head>
<body  id="bb">
	<form method="POST" onsubmit="return validation()">

        ENTER YOUR EMAIL ID:<input type="text" name="email">
        <input type="submit" name="search" value="SEARCH DATA"></form>


        <?php
        

        if(isset($_POST['search'])){
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
            
            <section class="personalinfo" id="pp" > 
                <table bordder="1px" cellspacing="5px" style="text-align: left">
                    <tr><th> ENROLMENT NUMBER:</th> <td><input type="text" placeholder="ENROLMENT NUMBER" autocomplete="off" id="enrol" name="enrol"value=" <?php echo $result['enrol']?>"></td></tr><tr></tr><tr></tr>
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

        
         <section class="eduinfo" id="pp"> 
        <table style="text-align: left">
            <tr>
        <th>H.S.C MARKS (In %):</th> <td><input type="text" name="marks" id="marks" value=" <?php echo $result['hsc']?>" /></td></tr>

        <tr>
        <th>NAME OF SCHOOL/ COLLEGE :</th> <td><input type="text" name="nsc" id="nsc"  value=" <?php echo $result['school']?>" /></td></tr>
        </table>
        </section>
            <br>
              <section class="documents" id="pp">
        <table style="text-align: left">
            <tr>
        <th style="text-align: left">AADHAR NO :</th> <td><input type="text" name="adhar" id="adhar" value=" <?php echo $result['adhar']?>"  /></td></tr>
        <tr><th>PAN CARD : </th> <td><input type="text" name="pan" id="pan" value=" <?php echo $result['pan']?>" /></td></tr>
        <tr><td style="font-weight: bold;">SEMESTER MARKS :</td></tr>
        <tr><td>SEM 1<input type="text" name="sem1" value="<?php echo $result['sem1']?>"></td>
            <td>SEM 2<input type="text" name="sem2" value="<?php echo $result['sem2']?>"></td>
            <td>SEM 3<input type="text" name="sem3" value="<?php echo $result['sem3']?>"></td>
        </tr>
        <tr><td>SEM 4<input type="text" name="sem4" value="<?php echo $result['sem4']?>"></td>
            <td>SEM 5<input type="text" name="sem5" value="<?php echo $result['sem5']?>"></td>
            <td>SEM 6<input type="text" name="sem6" value="<?php echo $result['sem6']?>"></td>
        </tr>
        </div>
    </table>
                 
    </section> 
    <button onclick="printpage()" style="float: right;width: 150px;height: 40px;font-weight: bold;font-size: 17px;
    padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px;border: 1px solid darkorange;background-color: black;color: white;border-top: 2px solid darkorange;border-left: 2px solid darkorange;margin-bottom: 10px;">PRINT FORM</button>
    </form>

        
    <?php }
    //echo "records";
}
else{
    ?> 
<script type="text/javascript">alert("NO RECORD FOUND !");</script>
    <?php
}}
?>
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