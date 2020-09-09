<?php
session_start();

?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="option.css" />

</head>
<body class="body">


<h2><center>Mawlana Bhashani Science & Technology University</center></h2>
<h2><center>User Registration Manual</center></h2>


<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tablerow">
<td align="center">Please Select Your Option</td>
</tr>

<tr class="tableheader">
<td align="center">
<form class="input" action="fillingupdata.php" method="get" >
<input type="submit"  value="Apply for filling up Application Form" >
<input type="hidden" name="uname" value="<?php echo $_SESSION["user_name"]; ?>">  
</form></td>
</tr>
<tr class="tableheader">
<td align="center"><form action="fillingupdata.php" method="get">
<input type="hidden" name="uname" value="<?php echo $_SESSION["user_name"]; ?>"> 
<input class="submit" type="submit" value="Update Application Form">
 </form> </td>
</tr>
<tr class="tableheader">
<td align="center"> <form action="" method="get">
<input type="hidden" name="uname" value="<?php echo $_SESSION["user_name"]; ?>">  
<input type="submit" value="Download Application Form">
</form></td>
</tr>
<tr class="tableheader">
<td align="center"><form action="admitcard.php" method="get">
<input type="hidden" name="uname" value="<?php echo $_SESSION["user_name"]; ?>">  
<input type="submit" value="Download Admit Card">
</form></td>
</tr>
<tr class="tableheader">
<td align="center"> <form action="result.php"> 
<input type="submit" value="Show Result">
</form></td>
</tr>

<tr class="tableheader">
<td align="center"><form action="logout.php" method="post">
<input type="submit" name="logout.php" value="Log Out">
</form></td>

</tr>

<tr class="tablerow">
<td>
 <!--
<input type="text" name="uname" value="<?php //echo $_SESSION["user_name"]; ?>"  > 
-->

</td>
</tr>
                                                                                   <!--
<input type="hidden" name="uname" value="<?php echo $_SESSION["user_name"]; ?>"  >  -->
</body>



</html>