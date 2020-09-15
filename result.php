<?php
session_start();
$message=" ";
if(count($_POST)>0) 
{
//$count==0;
$roll_number=$_POST['roll_no'];

$host="localhost";
$username="root";
$password="";
$db_name="admissionproject";
$tbl_name="aplicant_roll_result_info";
//$tbl_name2="hsc_info"; 
  $position="";
$conn=mysqli_connect("$host","$username","$password","$db_name")or die("can not connect");
//mysql_select_db("$db_name")or die("can not connect DB");
$sql="SELECT * FROM $tbl_name WHERE aplicant_roll='$roll_number'";
$result=mysqli_query($conn,$sql); 
//$count=mysql_num_rows($result);
$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["roll_no"]=$row['aplicant_roll'];
$position=$row['position'];
// $message="You will get a SMS where include User Name & Password";
//session_destroy();
} 

else {
    $message=" Sorry you are not selected";
    session_destroy();
}
}
if(isset($_SESSION["roll_no"])) {

     $message="Congratulation  You are selected. Your position is $position .";
     
     
     session_destroy();
  //  header("Location:user_dashboard.php");
}

?>


<html>
<head>
<title>My Form</title>
<body>
<style>
.cities {
    background: url(index.jpg);
    background-repeat: no-repeat;
    color:#2E2E1F;
    margin:20px;
    padding:44px;
}
.vill{
    background-color:#F5F5F0;
    color:#2E2E1F;
    margin:20px;
    padding:30px;    
}
</style>

<div class="cities">
<h1><center>Mawlana Bhashani Science & Technology University</center></h1>
<h2><center>Show Your Result</center></h2>
</div>
<center>
<p>Enter your roll and click submit</p>
</center>
<form method="post" action=""> 
<div class="vill">
<fieldset>
    <legend>Ener Your Roll</legend>
    <span>Roll Number</span>
<input type="text"  placeholder="Roll no."name="roll_no" required>
<input type="submit" name="submit" value="Submit" align="center">
Click here to <a href="logout.php" tite="Logout">Logout.</a>
<center><p1 align="left"><b><h3><?php if($message!="") { echo $message;  } ?></h3></b></p1>
</center>
</fieldset><br>
</div>
</form>
</body>
</head>
</html>