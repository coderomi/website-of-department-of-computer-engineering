<?php
include("connection.php");
error_reporting();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        .box{
            margin-left: 15px;
            margin-top: 10px;
            float: left;
        }
        .submit{
            width: 70px;
            height: 28px;
            font-size: 15px;
            margin-left: 320px;
            border: 1px solid;
            border-top: 2px solid;
            border-left: 2px solid;
        }
    </style>
</head>
<body style="background-color: rgba(65,186,216,0.8);">
    <form method="post" >
        ENTER EMAIL:
        <input type="text" name="email"><br>
        <div class="box">
        <section style="color: red;font-style: italic;"><sup>*</sup>FILL ALL FIELDS ! </section><br>

        ENTER EMAIL :
        <input type="text" name="ema"><br>
        ENTER CONTACT NUMBER:
        <input type="cont" name="cont"><br><br>
        <input type="submit" name="submit" class="submit" value="SUBMIT">
        </div>
    </form>

</body>
</html>
<?php
if(isset($_POST['submit']))
{

    $email=$_POST['email'];
    $ema=$_POST['ema'];
    $cont=$_POST['cont'];


    $query= " UPDATE stud_data SET email='$ema',cont='$cont' WHERE email='$email'";

    $data = mysqli_query($conn,$query);

    if($data){
        ?>
        <script type="text/javascript">alert("DATA UPDATED SUCESSULLY  !")</script>
        <?PHP
            }
            else{
                ?>
                <script type="text/javascript">alert("ERROR")</script><br><script type="text/javascript">alert("DATA NOT UPDATED.CONTACT ADMIN FOR ANY PROBLEM.  !")
            </script>
            <?PHP }
}

 ?>
