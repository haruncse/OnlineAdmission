<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","admissionproject");
//mysql_select_db("admissionproject",$conn);
$result = mysql_query($conn,"SELECT * FROM validate_user WHERE user_name='" . $_POST["user_name"] . "' and user_password = '". $_POST["user_password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["serial_no"] = $row[serial_no];
$_SESSION["user_name"] = $row[user_name]; 

} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["serial_no"])) {
header("Location:user_dashboard.php");
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div class="message">

</body><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter User Name & Password to Access Your Account</td>
</tr>
<tr class="tablerow">
<td align="right">User Name</td>
<td><input type="text" placeholder="User Name" name="user_name"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" placeholder="password" name="user_password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>