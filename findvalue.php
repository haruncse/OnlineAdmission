<html>
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
<h2><center>SSC & HSC Information</center></h2>
</div>
<div class="vill">
<fieldset>
    <legend>Educatinal Information</legend>
<?php

//session_start();

//$regValue = $_GET['regName'];

$ssc_roll=$_GET['ssc_roll'];
$ssc_board=$_GET['ssc_board'];
$ssc_year=$_GET['ssc_year'];

$hsc_roll=$_GET['hsc_roll'];
$hsc_board=$_GET['hsc_board'];
$hsc_year=$_GET['hsc_year'];

$user_name =$_GET['uname']; 
//echo"$user_name";


$host="localhost";
$username="root";
$password="";
$db_name="education_info";
$tbl_name="ssc_info";
$tbl_name2="hsc_info"; 

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("can not connect");
//mysql_select_db("$db_name")or die("can not connect DB");

$sql="SELECT * FROM $tbl_name WHERE roll_num='$ssc_roll' and board='$ssc_board' and passing_year='$ssc_year'";
$sql1="SELECT * FROM $tbl_name2 WHERE roll_num='$hsc_roll' and board='$hsc_board' and passing_year='$hsc_year'";

$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1); 
$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result1); 

//////////////////
/*
if(is_array($result1)) {
$_SESSION["roll_num"] = $result[roll_num];
$_SESSION["board"] = $result[board]; 
$_SESSION["year"] = $result[passing_year];
} else {
$message = "Invalid Roll number ,Board or Passing year";
}  
*/

/////////////////////
 
  //echo "<table border='1' align='center' cellpadding='5'> "; 
   
if($count==1 && $count1==1 )
{
    $message=""; 
  
/*  
    if(is_array($result1)) {
    $_SESSION["roll_num"] = $result[roll_num];
    $_SESSION["board"] = $result[board]; 
    $_SESSION["year"] = $result[passing_year];
    } else {
    $message = "Invalid Roll number ,Board or Passing year";
    }    
*/
    
  
 echo "<table border='3' align='left' cellpadding='10'> ";
        echo"<caption><h2><b>SSC Information</b></h2></caption>"; 
/* 
    echo "<tr>"; 
    // echo "<th align='middle'>SSC Informatiom</th>";
    echo "<td align='middle'>"."SSC INFORMATION"."</td>";       
    echo "</tr>";
    */ 
    /*
    <tr>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Roll No</th>
    <th>School</th>
    <th>Board</th>
    <th>GPA</th>
    </tr>";
*/
 
 
 while($row_ssc =mysql_fetch_array($result))
 {
     
    
/*
    echo "<tr>";
    echo "<td>" .$row['name'] ."</td>";
    echo "<td>" .$row['father'] ."</td>";
    echo "<td>" .$row['roll'] ."</td>";
    echo "<td>" .$row['school'] ."</td>";
    echo "<td>" .$row['Board'] ."</td>";
    echo "<td>" .$row['gpa'] ."</td>";
    echo"</tr>";    
*/
           
         echo "<tr>";           
         echo"<td>".'Roll Number'."</td>" ."<td>".$row_ssc['roll_num']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Student Name'."</td>" ."<td>".$row_ssc['student_name']."</td>";
         echo "</tr>";
         echo "<tr>";           
         echo"<td>".'Father Name'."</td>" ."<td>".$row_ssc['father_name']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Mother Name'."</td>" ."<td>".$row_ssc['mother_name']."</td>";
         echo "</tr>";  
                  echo "<tr>";           
         echo"<td>".'Board'."</td>" ."<td>".$row_ssc['board']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Passing Year'."</td>" ."<td>".$row_ssc['passing_year']."</td>";
         echo "</tr>";
         echo "<tr>";           
         echo"<td>".'GPA'."</td>" ."<td>".$row_ssc['gpa']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'English'."</td>" ."<td>".$row_ssc['english']."</td>";
         echo "</tr>";   
         ?>

         <?php
 
                            echo "<tr>";           
         echo"<td>".'Physics'."</td>" ."<td>".$row_ssc['physics']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Chemistry'."</td>" ."<td>".$row_ssc['chemistry']."</td>";
         echo "</tr>";
         echo "<tr>";           
         echo"<td>".'Mathmathics'."</td>" ."<td>".$row_ssc['mathmathics']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Biology'."</td>" ."<td>".$row_ssc['biology']."</td>";
         echo "</tr>"; 
         
          echo"</tr>";  
          
          
 }
 
 
 echo "</table>"; 
 ?>
                      
 <?php
 //echo "<input type="text" placeholder="User Name" name="user_name">"

 echo "<table border='3' align='right' cellpadding='10'> ";  
               echo"<caption><h2><b>HSC Information</b></h2></caption>"; 
       /*   echo "<tr>"; 
         echo "<th align='center'>HSC Informatiom</th>";
         //echo "<td>"."HSC INFORMATION"."</td>";       
         echo "</tr>"; 
         */
  while($row_hsc =mysql_fetch_array($result1))
 {
     
    
      /*
 echo "<tr>";
 echo "<td>" .$row['name'] ."</td>";
 echo "<td>" .$row['father'] ."</td>";
 echo "<td>" .$row['roll'] ."</td>";
 echo "<td>" .$row['school'] ."</td>";
 echo "<td>" .$row['Board'] ."</td>";
 echo "<td>" .$row['gpa'] ."</td>";
 echo"</tr>";    */
           
           
                    echo "<tr>";           
         echo"<td>".'Roll Number'."</td>" ."<td>".$row_hsc['roll_num']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Student Name'."</td>" ."<td>".$row_hsc['student_name']."</td>";
         echo "</tr>";
         echo "<tr>";           
         echo"<td>".'Father Name'."</td>" ."<td>".$row_hsc['father_name']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Mother Name'."</td>" ."<td>".$row_hsc['mother_name']."</td>";
         echo "</tr>";  
                  echo "<tr>";           
         echo"<td>".'Board'."</td>" ."<td>".$row_hsc['board']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Passing Year'."</td>" ."<td>".$row_hsc['passing_year']."</td>";
         echo "</tr>";
         echo "<tr>";           
         echo"<td>".'GPA'."</td>" ."<td>".$row_hsc['gpa']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'English'."</td>" ."<td>".$row_hsc['english']."</td>";
         echo "</tr>";   
                            echo "<tr>";           
         echo"<td>".'Physics'."</td>" ."<td>".$row_hsc['physics']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Chemistry'."</td>" ."<td>".$row_hsc['chemistry']."</td>";
         echo "</tr>";
         echo "<tr>";           
         echo"<td>".'Mathmathics'."</td>" ."<td>".$row_hsc['mathmathics']."</td>";
         echo "</tr>"; 
         echo "<tr>"; 
         echo "<td>".'Biology'."</td>" ."<td>".$row_hsc['biology']."</td>";
         echo "</tr>"; 
         
          echo"</tr>";  
           

 }

echo "</table>";   
} 

else {
    $message = "Invalid Roll number ,Board or Passing year";  
//print "<p align='center'>Wrong Roll number on Board name.please insert again.</p>";
}


//echo "</table>"; 
 
/*
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","educationboard","sschsc");
mysql_select_db("education_infot",$conn);
$result_ssc = mysql_query("SELECT * FROM hsc_info WHERE roll_num='".$_POST["roll_num"]."' and board='".$_POST["board"]."'and passing_year='".$_POST["passing_year"]."'");
$row_ssc  = mysql_fetch_array($result_ssc);
if(is_array($row_ssc)) {
$_SESSION["roll_num"] = $row_ssc[roll_num];
$_SESSION["board"] = $row_ssc[board]; 

} else {
$message = "Invalid Roll number ,Board or Passing year";
}
}
if(isset($_SESSION["roll_num"])) {
header("Location:index.php");
} */
?>






<div align="center">
<form action="fillingupdata.php" method="get">
<br><br><br><br><br><br>
<p> <h1>If those information are not correct then press BACK Button</h1></p>
<input type="hidden" name="uname" value="<?php echo"$user_name" ; ?>"> 
<input type="submit" name="Back" align="center" value="BACK"/>
</form>
</div>

<div align="center">
<form action="aplicantdetail_info.php" method="get">
<input type="hidden" name="ssc_roll" value="<?php echo "$ssc_roll";?>"/>
<input type="hidden" name="ssc_board" value="<?php echo "$ssc_board";?>"/>
<input type="hidden" name="ssc_year" value="<?php echo "$ssc_year";?>"/>
<input type="hidden" name="hsc_roll" value="<?php echo "$hsc_roll";?>"/>
<input type="hidden" name="hsc_board" value="<?php echo "$hsc_board";?>"/>
<input type="hidden" name="hsc_year" value="<?php echo "$hsc_year";?>"/>
<input type="hidden" name="uname" value="<?php echo"$user_name" ; ?>"> 
<br><br><br><br><br>
<p> <h1>If those information are correct then press NEXT Button </h1></p>
<input type="submit" align="middle" name="Next" value="NEXT"/>
</form>
</div>

   </fieldset> 
  </div> 
<!--<p> <a href="fillingupdata.php">     Back to First Page    </a>  </p>
-->
</body>
</html>