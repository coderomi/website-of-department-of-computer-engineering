<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FEEDBACK FORM</title>
  <link rel="stylesheet" type="text/css" href="feedback.css">

   <script type="text/javascript">
            function  valid(){
                var name = document.getElementById('enrol').value;
                var yr = document.getElementById('name').value;
                 var mob = document.getElementById('yr').value;
                var email = document.getElementById('email').value;
                var overall = document.getElementById('overall').value;
                var maintain = document.getElementById('maintain').value;
                var lab = document.getElementById('lab').value;
                var evaluation = document.getElementById('evaluation').value;
                var books = document.getElementById('books').value;  
                var teacher = document.getElementById('teacher').value;
                var cooperation = document.getElementById('cooperation').value;
                var available = document.getElementById('available').value;

                if (name=="") {
                    alert("PLEASE ENTER STUDENT NAME !");
                    return false;
                   } 
                  if (yr=="") {
                    alert("PLEASE ENTER ACADEMIC YEAR !");
                    return false;
                   } 
                   if (mob=="") {
                    alert("PLEASE ENTER CONTACT NUMBER !");
                    return false;
                   } 
                    if((mob.length != 10)) {
                    alert(" ENTER CORRECT CONTACT NUMBER ");return false;
                }
                   if (email=="") {
                    alert("PLEASE ENTER STUDENT EMAIL !");
                    return false;
                   }
                   if (overall=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   } 
                   if (maintain=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }  
                   if (lab=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }  
                   if (evaluation=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }  
                   if (books=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }  
                   if (teacher=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }
                   if (cooperation=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }  
                   if (available=="") {
                    alert("PLEASE SELECT ALL FIELDS !");
                    return false;
                   }    
                  
                   
    </script>
</head>
<body >
<center><div class="head"><h2 >STUDENT FEEDBACK FORM</h2> </div></center>

                       <div class="info"><b> Dear Students,</b><br>
                        This form has been designed  to seek feedback from you to strengthen the quality of teaching-learning  environment and to improve the performance of the teachers. The information  provided by you will be kept confidential.</div>
                      <br><br>
                       
                      <table width="100%" border="0px" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>
                       <form id="contact-form" method="post" onsubmit="return valid()">
                       <div class="edit"> Enrolment Number :</div>
                        <input type="text" placeholder="Enrolment Number" class="control" name="enrol" id="enrol" required >
                       </td>
                       <td><div class="edit">Name of Student :</div>
                       <input type="text" placeholder="Name of Student" class="control" name="name" id="name" required>
                       </td>
                      </tr>

                      <tr>
                      <td><div class="edit">Academic Year :</div>
                             <input type="text" placeholder="Academic Year" class="control" name="year" id="year" required>
                        </td>
                        <td><div class="edit">Email ID</div>
                           <input type="email" placeholder="Email Id" class="control" name="email" id="email" required>
                         </td>
                       </tr>
                      <tr>
                      <td><div class="edit">1.Overall content and design of the curriculum</div>
                         <select list="overall" name="overall" id="overall" class="control"  autocomplete="off" required>
                         <datalist id="overall">
                         <option selected="Satisfied" value="SatisfiedSatisfiedSatisfied" name="lab" >Select-</option>
                         <option value="Highly satisfied" name="overall" >A-Highly satisfied</option>
                         <option  value="Satisfied" name="overall" >B-Satisfied</option>
                           <option value="Neutral" name="overall" >C- Neutral</option>
                           <option value="Unsatisfied" name="overall" >D-Unsatisfied</option>
                           </datalist>
                        </td>
                        <td><div class="edit">2.Maintenance of attendance record by teachers</div>
                         <select list="maintain" name="maintain" id="maintain" class="control" placeholder="select" required>
                         <datalist id="maintain">SatisfiedSatisfiedSatisfied
                                                <option selected="Satisfied" value="SatisfiedSatisfiedSatisfied" name="maintain" >Select-</option>
                                                <option value="Highly satisfied" name="maintain" >A-Highly satisfied</option>
                                                <option  value="Satisfied" name="maintain" >B-Satisfied</option>
                                                  <option value="Neutral" name="maintain" >C- Neutral</option>
                                                  <option value="Unsatisfied" name="maintain" >D-Unsatisfied</option>
                                                  </datalist>
                         </td>
                       </tr>
                        <tr>
                      <td><div class="edit">3.Laboratory   facilities available in college</div>
                        <select list="lab" name="lab" id="lab" class="control" placeholder="select" required>
                         <datalist id="lab">
                                                <option selected="Satisfied" value="SatisfiedSatisfiedSatisfied" name="lab" >Select-</option>
                                               <option value="Highly satisfied" name="lab" >A-Highly satisfied</option>
                                  <option   value="Satisfied" name="lab" >B-Satisfied</option>
                                                  <option value="Neutral" name="lab" >C- Neutral</option>
                                                  <option value="Unsatisfied" name="lab" >D-Unsatisfied</option>
                                                  </datalist>
                        </td>
                        <td><div class="edit">4.Evaluation scheme designed for each of the course</div>
                        <select list="evaluation" name="evaluation" id="evaluation" class="control" placeholder="select" required>
                         <datalist id="evaluation">
                                                <option selected="Satisfied"selected="Satisfied" value="SatisfiedSatisfied" name="evaluation" >Select-</option>
                                               <option value="Highly satisfied" name="evaluation" >A-Highly satisfied</option>
                                    <option value="Satisfied" name="evaluation" >B-Satisfied</option>
                                                  <option value="Neutral" name="evaluation" >C- Neutral</option>
                                                  <option value="Unsatisfied" name="evaluation" >D-Unsatisfied</option>
                                                  </datalist>
                         </td>
                       </tr>
                       <tr>
                      <td><div class="edit">5.Availability of prescribed books/ reference books in library</div>
                        <select list="books" name="books" id="books" class="control" placeholder="select" required>
                         <datalist id="books">
                                                <option selected="Satisfied"selected="Satisfied" value="Satisfied">  Select-</option>
                                               <option value="Highly satisfied" name="books" >A-Highly satisfied</option>
<option value="Satisfied" name="books" >B-Satisfied</option>
                                                  <option value="Neutral" name="books" >C- Neutral</option>
                                             <option value="Unsatisfied" name="books" >D-Unsatisfied</option>
                                                  </datalist>
                        </td>
                        <td><div class="edit">6.Guidance by teachers for overall personality development of student</div>
                          <select list="teacher" name="teacher" id="teacher" class="control" placeholder="select" required>
                         <datalist id="teacher">
                                                <option selected="Satisfied"selected="Satisfied" value="Satisfied" name="teacher" >Select-</option>
                                               <option value="Highly satisfied" name="teacher" >A-Highly satisfied</option>
                <option value="Satisfied" name="teacher" >B-Satisfied</option>
                                                  <option value="Neutral" name="teacher" >C- Neutral</option>
                                                  <option value="Unsatisfied" name="teacher" >D-Unsatisfied</option>
                                                  </datalist>
                      
                       </tr>
                        <tr>
                      <td><div class="edit">7.Cooperation from teachers, library staff and office staff</div>
                        <select list="cooperation" name="cooperation" id="cooperation" class="control" placeholder="select" required>
                         <datalist id="cooperation">
                                                <option  selected="Satisfied" value="Satisfied" name="cooperation" >Select-</option>
                                               <option value="Highly satisfied" name="cooperation" >A-Highly satisfied</option>
                                                <option  value="Satisfied" name="cooperation" >B-Satisfied</option>
                                                  <option value="Neutral" name="cooperation" >C- Neutral</option>
                                                  <option value="Unsatisfied" name="cooperation" >D-Unsatisfied</option>
                                                  </datalist>
                        </td>
                        <td><div class="edit">8.Availability and Accessibility of teachers after lecture timing</div>
                           <select list="available" name="available" id="available" class="control" placeholder="select" required>
                         <datalist id="available">
                                                <option selected="Satisfied" value="satisfied" name="available" >Select-</option>
                                              <option value="Highly satisfied" name="available" >A-Highly satisfied</option>
                                                <option  value="Satisfied" name="available" >B-Satisfied</option>
                                                  <option value="Neutral" name="available" >C- Neutral</option>
                                                  <option value="Unsatisfied" name="available" >D-Unsatisfied</option>
                                                  </select>
                         </td>
                       </tr></table><br><center>
                       <input type="submit" name="submit" value="SUBMIT" class="submit" onsubmit="return valid()"></center>
                       </form>
</body>
</html>
 <?php
   if(isset($_POST['submit']))
    {
    $enrol=$_POST['enrol'];
    $name=$_POST['name'];
    $overall=$_POST['overall'];
    $email=$_POST['email'];
    $year=$_POST['year'];
    $maintain=$_POST['maintain'];
    $lab=$_POST['lab'];
    $evaluation=$_POST['evaluation'];
    $books=$_POST['books'];
    $teacher=$_POST['teacher'];
    $cooperation=$_POST['cooperation'];
    $available=$_POST['available']; 

    $insertquery ="INSERT INTO `feedback`(`enrol`, `name`, `year`, `email`, `content`, `maintain`, `lab`, `evaluation`, `books`, `guide`, `cooperation`, `availability`)VALUES('$enrol','$name','$year','$email','$overall','$maintain','$lab','$evaluation','$books','$teacher','$cooperation','$available')";

    $res = mysqli_query($conn,$insertquery);
         if($res){ 
               ?>
                 <script type="text/javascript">alert("YOUR FORM HAS BEEN SUCESSFULLY SUBMITED !")</script>; 
                 <?php
             }
            else{
              
               ?>
               <script type="text/javascript">alert(" FORM NOT SUBMITED !"<br>"FOR ANY QUERY CONTACT TO ADMIN")</script> ;
               <?php
            
            }
              
}
?>

