<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","admissionproject");

if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  

//mysqli_close($conn);  

//mysqli_select_db("admissionproject",$conn);
$result = mysqli_query($conn,"SELECT * FROM validate_user WHERE user_name='" . $_POST["user_name"] . "' and user_password = '". $_POST["user_password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_password"] = $row[user_password];
$_SESSION["user_name"] = $row[user_name]; 

} else {
$message = "User Name or Password is Incorrect";
}
}
if(isset($_SESSION["user_password"])) {
header("Location:user_dashboard.php");
}
?>
<html>
<head> 

<style>
    .cities {
        
        padding: 35px;
        background: url(Prottoy71.jpg);
        background-repeat: no-repeat;
       
        color:#1F6837;
        margin:20px;
        padding:30px;
    }

    p1{
      opacity:1.0;
      font-weight:100%;
      color: red;

    }

    .mytext {
        value:'User name';
        margin: 10%;
        background-color:#eeeeee;
        border-radius: 25px;
        height:35px;
        width:250px;
        padding:0px;

           }
    .mytext1 {
        margin: 0%;
        background-color:#eeeeee;
        border-radius: 25px;
        height:35px;
        width:250px;
        padding:0px;

           }
    a:link {
        
        color:#000000;
        text-decoration: none;
    }
        
    .vill{
        background-color:#F5F5F0;
        color:#2E2E1F;
        margin:2px;
        padding:5px;    
}

</style>
</head>

<body>

<div class="cities">
<h1><center>Mawlana Bhashani Science & Technology University</center></h1>
<h2><center>Welcome To Admission website </center></h2>
<table border="0" cellpadding="4" cellspacing="8" align="center">
<tr>
<td bgcolor="#EBFAFF"><a href="Home.php">Home</a></td>
<td bgcolor="#EBFAFF"><a href="">Admission Process</a></td>
<td bgcolor="#EBFAFF"><a href="http://www.mbstu.ac.bd">MBSTU Website</a></td>
</tr>
</table>
</div>
 <marquee>
<h3>To access Your account You have to complete your registration via
TeleTalk mobile.After completing your registration you will get User Name 
& Password.Using this User Name & Password You have to login here  to fill up your application form.
Thank you for visiting our web site.</h3>
</marquee> 
<div class="vill">
<fieldset>
<legend align="center"> <marquee> <h1>Please login here</h1> </marquee> </legend>    
<center><p1><b><h3><?php if($message!="") { echo $message; } ?></h3></b></p1></center>
<form name="frmUser" method="post" action="">
<table border="0" cellpadding="3" cellspacing="1" width="350" height="200" align="center">
<tr class="tablerow">
<td align="center"><input type="text" placeholder="User Name" name="user_name" class="mytext" style="text-align:center;"/></td>
</tr>
<tr class="tablerow">
<td align="center"><input type="password" placeholder="Password" name="user_password" class="mytext1" style="text-align:center;"/></td>
</tr>
<tr class="tablerow">
<td align="center"><input type="submit" value="login"></td>
</tr>
<tr class="tablerow">
<td align="center"><a href="Forget.php"><p1>Forgot Your User Name or Password ?</p1></a></td>
</tr>
</table> 
</fieldset>  
</div>

    
</body>

</html>