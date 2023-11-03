<?php
include("connection.php");
error_reporting(0);
?>
    
    

<!DOCTYPE HTML>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <title>STUDENT DATABASE</title>
        <style type="text/css" media="all">   
        </style>
        <link rel="stylesheet" type="text/css" href="studreg.css">

        
         <script type="text/javascript">
            function  valid(){
                var fname = document.getElementById('fname').value;
                var mname = document.getElementById('mname').value;
                 var lname = document.getElementById('lname').value;
                var faname = document.getElementById('faname').value;
                var moname = document.getElementById('moname').value;
                var dob = document.getElementById('dob').value;
                var cont = document.getElementById('cont').value;
                var add1 = document.getElementById('add1').value;
                var add2 = document.getElementById('add2').value;  
                var tal = document.getElementById('tal').value;
                var dist = document.getElementById('dist').value;
                var state = document.getElementById('state').value;
                var pin = document.getElementById('pin').value;
                var blood = document.getElementById('blood').value;
                var marks = document.getElementById('marks').value;
                 var clg = document.getElementById('clg').value;
                  var adhar = document.getElementById('adhar').value;
                var pan = document.getElementById('pan').value;
                var pass = document.getElementById('pass').value;
                 var rpass = document.getElementById('rpass').value;
                 var email = document.getElementById('email').value;

                   if (fname=="") {
                    alert("PLEASE ENTER STUDENT FIRST NAME !");
                    return false;
                   }               
                   if((fname.length <= 2) || (fname.length >20)) {
                    alert(" ENTER NAME BETWEEN 2 AND 20 CHARACTERS !");
                    return false;
                }
                if (mname=="") {
                    alert("PLEASE ENTER STUDENT MIDDLE NAME !");
                    return false;
                   }
                   if((mname.length <= 2) || (mname.length >20)) {
                    alert(" ENTER NAME BETWEEN 2 AND 20 CHARACTERS !");
                    return false;
                }
                if (lname=="") {
                    alert("PLEASE ENTER STUDENT LAST NAME !"); return false;
                   }
                   if((lname.length <= 2) || (lname.length >20)) {
                    alert(" ENTER NAME BETWEEN 2 AND 20 CHARACTERS !"); return false;
                }if (faname=="") {
                    alert("PLEASE ENTER FATHER NAME !"); return false;
                   }
                   if((faname.length <= 2) || (faname.length >20)) {
                    alert(" ENTER NAME BETWEEN 2 AND 20 CHARACTERS !"); return false;
                }
                if (moname=="") {
                    alert("PLEASE ENTER MOTHER NAME !"); return false;
                   }
                   if((moname.length <= 2) || (moname.length >20)) {
                    alert(" ENTER NAME BETWEEN 2 AND 20 CHARACTERS !"); return false;
                }
                if( dob=="") {
                    alert("PLEASE ENTER DATE OF BIRTH ");return false;
                }
                if( cont=="") {
                    alert("PLEASE ENTER CONTACT NUMBER");return false;
                }
                if((cont.length != 10)) {
                    alert(" ENTER CORRECT CONTACT NUMBER ");return false;
                }
                if( add1=="") {
                    alert("PLEASE ENTER ADDRESS");return false;
                }
                if( tal=="") {
                    alert("PLEASE ENTER TALUKA ");return false;
                }
                if( dist=="") {
                    alert("PLEASE ENTER DISTRICT ");return false;
                }
                if( state=="") {
                    alert("PLEASE ENTER STATE ");return false;
                }
                if( pin=="") {
                    alert("PLEASE ENTER PIN CODE ");return false;
                }
                if((pin.length != 6)) {
                    alert(" ENTER CORRECT PIN NUMBER ");return false;
                } 
                if( blood=="") {
                    alert("PLEASE ENTER BLOOD GROUP ");return false;
                }
                if( email=="") {
                    alert("PLEASE ENTER E-MAIL ");return false;
                } 
                if( marks== ""){
                    alert("PLEASE ENTER  MARKS !");return false;
                }
                if((marks <= 10) || (marks >100)) {
                    alert(" ENTER CORRECT MARKS !");return false;
                }
                if( clg== ""){
                    alert("PLEASE ENTER SCHOOL NAME !");return false;
                } 
                if( adhar== ""){
                    alert("PLEASE ENTER AADHAR NUMBER!");return false;
                }
                if((adhar.length) != 12) {
                    alert(" ENTER CORRECT AADHAR CARD NUMBER. ");return false;
                }
                if( pan== ""){
                    alert("PLEASE ENTER PAN CARD NUMBER!");return false;
                }
                if ((pan.length) != 10) {
                    alert("PLEASE ENTER CORRECT PAN NUMBER");return false;
                }
                if( pass== ""){
                    alert("PLEASE ENTER PASSWORD!");return false;
                }
                if( rpass== ""){
                    alert("PLEASE ENTER RE-ENTER PASSWORD !");return false;
                }
                if((pass.value) != (rpass.value)){
                    alert("PLEASE ENTER CORRECT PASSWORD IN BOTH.");return false;
                }       

                
               
              }   


                     
           </script>
 </head>
    <body class="full">
     <header>
        <img src="imgs\clglogo.png" class="clglogo"  height="150px" width="100%" ><br />
    </header> 
   <ul>
            <b>
            <a href="index.html"><li>HOME </li></a>
            <a href="aboutus.html"><li>ABOUT COLLEGE </li></a>
            <a href="ce.html"><li>COMPUTER ENGINEERING </li></a>
            <a href="gallery.html"><li>GALLERY </li></a>
            <a href="studlogin.php"><li>STUDENT LOGIN</li></a>
            </b>
                
        </ul><br><br>
        <h2><center>STUDENT'S REGISTRATION FORM</center></h2>
    
        <form method="POST" onsubmit="return valid()" >
    <section class="alert" style="color: red;font-style: italic;font-size: 20px;font-weight: bold;"><sup>*</sup> PLEASE FILL FORM CAREFULLY, AFTER SUBMISSION SOME FIELDS CANNOT BE CHANGED. <sup>*</sup></section>
            <section class="personalinfo"> 
                <table bordder="1px" cellspacing="5px" style="text-align: left">
                    <tr>
           <th> STUDENT'S NAME:</th> <td><input type="text" placeholder="FIRST NAME" autocomplete="off" id="fname" name="fname">
<td><input type="text" placeholder="MIDDLE NAME" id="mname" name="smn"> 
<td><input type="text" placeholder="LAST NAME" id="lname" name="sln"></tr>
<tr>
    <SPAN id="sn"></SPAN>
    <th>FATHER'S NAME : </th><td> <input type="text" name="ffn"  placeholder="FIRST NAME" id="faname"></td>
            <tr>
        <th>MOTHER'S NAME:</th> <td><input type="text" name="mn"  placeholder="FIRST NAME" id="moname" />
        <th>DATE OF BIRTH :</th> <td> <input type="date" name="dob" id="dob"  /></td></tr>
        <tr>
         <th>GENDER : <td><input type="radio" name="gend" id="MALE" value="MALE" /><label for="MALE">MALE</label></td>
         <td><input type="radio" name="gend" id="FEMALE" value="FEMALE" /><label for="FEMALE">FEMALE</label></td></tr>
        <th>CONTACT NO:</th> <td><input type="number" name="contactno"  id="cont" /></td></tr>
        <tr>
        <th>ADDRESS :</th> <td><input type="text" name="address1"  placeholder="LINE 1" id="add1" /></td>
        <td><input type="text" name="address2"  value="" placeholder="LINE 2" id="add2" /></td></tr>
        <tr>
        <th>TALUKA :</th> <td><input type="text" name="tal"  placeholder="TALUKA" id="tal" /></td>
        <th>DISTRICT :</th> <td><input type="text" name="dist"  id="dist" /></td></tr>
        <tr>
            <th>STATE:</th> <td>
            <select id="STATE" name="bg">
               <option> SELECT STATE</option>
               <option value="Andhra Pardesh">ANDHRA PARDESH </option>
               <option value="Arunachal Pardesh">ARUNACHAL PARDESH </option>
              <option value="Assam">ASSAM </option>
              <option value="Bihar">BIHAR </option>
              <option value="Chhattisgarh">CHHATTISGRH </option>
              <option value="Goa">GOA </option>
              <option value="Maharashtra">MAHARASHTRA </option>
              <option value="Gujarat">GUJARAT </option>
              <option value="kerala">KERALA </option>
              <option value="Manipur">MANIPUR </option>
              <option value="Punjab">PUNJAB </option> 
        </select></td>
        <tr>
        <th>BLOOD GROUP :</th> <td> 
        <select id="blood" name="bg" >
             <option > SELECT BLOOD GROUP</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select></td>
        <th>E-Mail :</th> <td><input type="email" name="email"  id="email" /></td>
    </tr>
    </table>
</section>

        <br>

        
         <section class="eduinfo"> 
        <table style="text-align: left">
            <tr>
        <th>H.S.C MARKS (In %):</th> <td><input type="text" name="marks" id="marks" /></td></tr>
        <tr>
        <th>NAME OF SCHOOL/ COLLEGE :</th> <td><input type="text" name="nsc" id="clg" /></td></tr>
        </table>
        </section>
            <br>
              <section class="documents">
        <table style="text-align: left">
            <tr>
        <th style="text-align: left">AADHAR NO :</th> <td><input type="number" name="adhar" id="adhar"  /></td></tr>
        <tr><th>PAN CARD : </th> <td><input type="text" name="pan" id="pan" /></td></tr>
       
    </table>
    </section>

    </section>
            <br>
              <section class="logininfo">
        <br /><table style="text-align: left">
            <tr>
       
        <tr><th>ENTER PASSWORD:</th> <td><input type="text" name="pass" id="pass" /></td></tr>
        <tr><th>RE-ENTER PASSWORD:</th> <td><input type="password" name="rpss" id="rpass" ></td></tr>
            </table><br>
                    <center><input type="submit" name="submit" value="SUBMIT" class="submit">

        </center>
    </section>

        
    </form>

        
    </body>



</html>
<?php
    if(isset($_POST['submit']))
    {

    $sfn=$_POST['fname'];
    $smn=$_POST['smn'];
    $sln=$_POST['sln'];
    $ffn=$_POST['ffn'];
    $fmn=$_POST['fmn'];
    $fln=$_POST['fln'];
    $mn=$_POST['mn'];
    $dob=$_POST['dob'];
    $contact=$_POST['contactno'];
    $add1=$_POST['address1'];
    $add2=$_POST['address2'];
    $tal=$_POST['tal'];
    $dist=$_POST['dist'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];
     $bloodgrup=$_POST['bg'];
      $email=$_POST['email'];
 $idm1=$_POST['idmark1'];
 $idm2=$_POST['idmark2'];
 $marks=$_POST['marks'];
 $nsc=$_POST['nsc'];
 $adhar=$_POST['adhar'];
 $pan=$_POST['pan'];
  $bname=$_POST['bankname'];
 $accntno=$_POST['accntno'];
 $ifsc=$_POST['ifsc'];
 $branch=$_POST['branch'];
 $regno=$_POST['regno'];
 $pass=$_POST['pass'];
 $conpass=$_POST['rpss'];
    $gender=$_POST['gend'];
 $enrlyr=$_POST['enrlyr'];

  $insertquery ="INSERT INTO `stud_data`(`fname`, `mname`, `lname`, `faname`, `moname`, `dob`, `gen`, `cont`, `add1`, `add2`, `tal`, `dist`, `state`, `pin`, `blood`, `email`, `hsc`, `school`, `adhar`, `pan`, `pass`) VALUES ('$sfn',' $smn','$sln','$ffn','$mn','$dob','$gender','$contact','$add1','$add2','$tal','$dist','$state','$pin','$bloodgrup','$email','$marks','$nsc','$adhar','$pan','$pass')";
  
 
  
// echo $insertquery;
      $res = mysqli_query($conn,$insertquery);
         if($res){ 

                ?>
                 <script type="text/javascript">alert("YOUR FORM HAS BEEN SUCESSFULLY SUBMITED !")</script>; 
                 <?php
             }
            else{
                ?>
               <script type="text/javascript">alert(" FORM NOT SUBMITED !"<br>"FOR ANY QUERY CONTACT TO A.N.O")</script> ;
               <?php
            
            }
              
}
?>