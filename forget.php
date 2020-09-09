<?php
session_start();
$message=" ";
if(count($_POST)>0) 
{
//$count==0;
$mobile_number=$_POST['mobile_no'];

$host="localhost";
$username="root";
$password="";
$db_name="user_validation_mobile";
$tbl_name="validate_user";
//$tbl_name2="hsc_info"; 

mysql_connect("$host","$username","$password")or die("can not connect");
mysql_select_db("$db_name")or die("can not connect DB");
$sql="SELECT * FROM $tbl_name WHERE mobile_no='$mobile_number'";
$result=mysql_query($sql); 
//$count=mysql_num_rows($result);
$row  = mysql_fetch_array($result);

if(is_array($row)) {
$_SESSION["mobile_no"]=$row['mobile_no'];
// $message="You will get a SMS where include User Name & Password";
//session_destroy();
} 

else {
    $message=" Sorry you are not validate user or your payment is not completed yet";
    session_destroy();
}
}
if(isset($_SESSION["mobile_no"])) {

     $message="You will get a SMS where include User Name & Password";
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
<h2><center>User Name & Password Recover</center></h2>
</div>
<center>
<p>You have to submit your mobile number which had been given during payment</p>
</center>
<form method="post" action=""> 
<div class="vill">
<fieldset>
    <legend>Ener Your Mobile Number</legend>
    <span>Mobile Number</span>
<input type="text"  placeholder="Enter mobile no."name="mobile_no" required>
<input type="submit" name="submit" value="Submit" align="center">
<center><p1 align="left"><b><h3><?php if($message!="") { echo $message; } ?></h3></b></p1>
</center>
</fieldset><br>
</div>
</form>
</body>
</head>
</html>