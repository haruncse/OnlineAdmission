<?php

$user_name =$_GET['uname']; 
//echo"$user_name";


$host="localhost";
$username="root";
$password="";
$db_name="admissionproject";

$aplicant_education_info="aplicant_education_info";   
$aplicant_genaral_info="aplicant_genaral_info"; 
$aplicant_permanent_home_info="aplicant_permanent_home_info";
$aplicant_picture_signature="aplicant_picture_signatur";
$aplicant_present_home_info="aplicant_present_home_info";

/*
  $tbl_name="ssc_info";
  $tbl_name2="hsc_info"; 
*/

mysqli_connect("$host","$username","$password")or die("can not connect");
mysql_select_db("$db_name")or die("can not connect DB");

 //$sql="SELECT * FROM $aplicant_education_info WHERE user_name='$user_name'";

   $sql1="SELECT * FROM $aplicant_education_info WHERE user_name='$user_name'"; 
      $sql2="SELECT * FROM $aplicant_genaral_info WHERE user_name='$user_name'";   
      $sql3="SELECT * FROM validate_user WHERE user_name='$user_name'"; 
     // validate_user
 /*
$sql="SELECT * FROM $tbl_name WHERE roll_num='$ssc_roll' and board='$ssc_board' and passing_year='$ssc_year'";
$sql1="SELECT * FROM $tbl_name2 WHERE roll_num='$hsc_roll' and board='$hsc_board' and passing_year='$hsc_year'";

   */

$result=mysql_query($sql1);
$result1=mysql_query($sql2); 
$count=mysql_num_rows($result);
$count1=mysql_num_rows($result1); 


$result2=mysql_query($sql3);



/////////////////////
 
  //echo "<table border='1' align='center' cellpadding='5'> "; 
   
if($count==1 && $count1==1 )
{
    $message=""; 
  

    
  
      
 
 
 
 while($row_ssc =mysql_fetch_array($result))
 {
     
    
        
         
         $ssc_gpa= $row_ssc['ssc_gpa'];
         $hsc_gpa= $row_ssc['hsc_gpa']; 
         $unit=$row_ssc['unit'];  
  
         ?>

         <?php    
          
 }
 

 ?>
                      
 <?php

  while($row_hsc =mysql_fetch_array($result1))
 {
     

  $aplicant_name=$row_hsc['aplicant_name'];
  $aplicant_father_name=$row_hsc['aplicant_father_name'];
  $aplicant_mother_name=$row_hsc['aplicant_mother_name'];
  $aplicant_birth_date=$row_hsc['aplicant_birth_date'];
  $aplicant_gender=$row_hsc['aplicant_gender'];

           

 }

   while($row_user =mysql_fetch_array($result2))
 {
     
    
           

           
               
     $aplication_no=$row_user['application_no'];
                    /*
             $aplicant_name=$row_hsc['aplicant_name'];
            $aplicant_father_name=$row_hsc['aplicant_father_name'];
            $aplicant_mother_name=$row_hsc['aplicant_mother_name'];
             $aplicant_birth_date=$row_hsc['aplicant_birth_date'];
              $aplicant_gender=$row_hsc['aplicant_gender'];
              */

           

 }
   
} 

else 
{
   $message=" You already fill up your aplication form"; 
    echo $message;
    header("Location:user_dashboard.php");
}


//echo "</table>"; 
 

?>


<?php

$host="localhost";
$username="root";
$password="";
$db_name="admissionproject";
$aplicant_picture_signature="aplicant_picture_signature";

  //$user_name='harun';

$con=mysql_connect("$host","$username","$password")or die("can not connect");
mysql_select_db("$db_name")or die("can not connect DB");
$qry="select aplicant_image from $aplicant_picture_signature where aplicant_image_name='$user_name'";
//$res=mysql_query($qry);  
$res=mysql_query($qry,$con);
while($row=mysql_fetch_array($res))
{

    //echo '<img height="300" width="300" src="data:image/jpg/png;base64,'.$row['aplicant_image'].'"/>';

   
?>




<html>

<style type="text/css">
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
<h2><center>Admit Card For MBSTU Admission Test </center></h2>
</div>

<form>
<div class="vill">
<fieldset>
    <legend></legend> 
    <table border="0" cellpadding="5" cellspacing="8" width="" align="left">              
<tr>
<td align="left">
<font size="5" face="Times New Roman"><b>Student Name:</b></font>
</td>
<td align="left"> 
<input type="text" placeholder="" size="30" name="Student_Name" value="<?php echo $aplicant_name;?>" readonly="<?php echo $aplicant_name;?>"><br/>
 </td>
</tr>
<tr>
<td align="left">
<font size="5" face="Times New Roman"><b>Father's Name:</b></font>
</td>
<td align="left">
<input type="text" placeholder="" size="30" name="Father's Name"value="<?php echo $aplicant_father_name;?>" readonly="<?php echo $aplicant_father_name;?>"><br/>
  </td>
</tr>
<tr>
<td align="left">
<font size="5" face="Times New Roman"><b>Mother's Name:</b></font>
</td>
<td align="left"> 
<input type="text" placeholder="" size="30" name="Mother's Name" value="<?php echo $aplicant_mother_name;?>" readonly="<?php echo $aplicant_mother_name;?>"><br/>
  </td>
</tr>
 <tr>
<td align="left">
<font size="5" face="Times New Roman"><b>Date of Birth</b></font>
</td>
<td align="left"> 
<input type="text" size="10" placeholder="" name="birth" value="<?php echo $aplicant_birth_date;?>" readonly="<?php echo $aplicant_birth_date;?>"><br/>
 </td>
</tr>
<tr>
<td align="left">
<font size="5" face="Times New Roman"><b>Gender</b></font>
</td>
<td align="left">
<input type="text" size="10" placeholder="" name="gender" value="<?php echo $aplicant_gender;?>" readonly="<?php echo $aplicant_gender?>"></br>
</td>
</tr>
 </table>
  <div>
 <fieldset>
 <legend>
 Upload Your Picture of Size 320 X 230 Pixel
 </legend>
 <center>


  <?php
      echo '<img height="300" width="300" style="width:320px;height:230px; margin-top:10px;"  src="data:image/jpg/png;base64,'.$row['aplicant_image'].'"/>';  

    } 
    mysql_close($con); 
?>

 <br/>
 
 <!--<input type="file" name="aplicant_image" accept="image/*"  onchange="showMyImage(this)" required/> --> 
    
 
</center>
 </fieldset>
 
 </div>
</fieldset>
</div>


<div class="vill">
<fieldset>
    <legend><h2>SSC & HSC Information</h2></legend> 
    <table border="0" cellpadding="5" cellspacing="8" width="" align="left">              
<tr>
<td align="left">
<font size="5" face="Times New Roman"><b>SSC GPA</b></font>
</td>
<td align="left">
<input type="text" size="5" placeholder="" name="GPA" value="<?php echo $ssc_gpa;?>" readonly="<?php echo $ssc_gpa;?>"><br/>
</td>

<td align="left">
<font size="5" face="Times New Roman"><b>HSC GPA</b></font>
</td>
<td align="left">
<input type="text" size="5" placeholder="" name="GPA" value="<?php echo $hsc_gpa;?>" readonly="<?php echo $hsc_gpa;?>"><br/>
  </td>
</tr>
</table>
 </fieldset>
</div>
<br/>

</form>
  <div class="vill">
<fieldset>
    <legend><h2>Admission Unit & Roll</h2></legend>
        <table border="0" cellpadding="4" cellspacing="20" width="" height=""  align="left">              
<tr>
<td align="left">
<font size="5" face="Times New Roman"><b>Unit</b></font>
</td>
<td align="right"> 
<input type="text" size="30" name="Unit" value="<?php echo $unit;?>" readonly=""><br/>
<p class="border"</p>
     </td>
     </tr>
     <tr>
     <td align="left">
<font size="5" face="Times New Roman"><b>Roll No</b></font>
</td>
     <td align="right"> 
<input type="text" size="30" name="Roll_No" value="<?php echo $aplication_no;?>" readonly=""><br/>
<p class="border"</p>
     </td>
</tr>

</table>

<?php
    
$host="localhost";
$username="root";
$password="";
$db_name="admissionproject";
$aplicant_picture_signature="aplicant_picture_signature";



$con=mysql_connect("$host","$username","$password")or die("can not connect");
mysql_select_db("$db_name")or die("can not connect DB");
$qry="select aplicant_signature from $aplicant_picture_signature where aplicant_image_name='$user_name'";
//$res=mysql_query($qry);  
$res=mysql_query($qry,$con);
while($row=mysql_fetch_array($res))
{
   
    //echo '<img height="300" width="300" src="data:aplicant_signature;base64,'.$row['aplicant_signature'].'"';

      //  }
       //con=mysql_connect("$host","$username","$password")or die("can not connect"); 
   
?>

   <div class="vill">
<fieldset>
<legend>
 Signature of Size 300 X 90 Pixel
 </legend>
 <center>
    <?php
      echo '<img height="300" width="300" style="width:320px;height:90px; margin-top:10px;"  src="data:image/jpg/png;base64,'.$row['aplicant_signature'].'"/>';  

    } 
    mysql_close($con);
?>
  <br/>  

 </fieldset>
</div>
 </fieldset>
</div>

 <div class="vill">
<fieldset>
    <legend><h2>Requirements</h2></legend>

<ol>
<li><font size="5" face="Times New Roman">Applicant must bring this admit card during the day of admission test.</font></li>
<li><font size="5" face="Times New Roman">Applicant must bring one photocopy(atttested) of both SSC & HSC certificate/marksheet/admit card/registration card.</li>
</font></ol>
    </fieldset>
</div>
 <div class="vill">
<fieldset>
    <legend><h2>Rules</h2></legend>
<ol>
<li><font size="5" face="Times New Roman">Do not bring any electronic devices like mobile,computer,smart watch etc.</font></li>
<li><font size="5" face="Times New Roman">Do not bring any type of calculator like general,scientific etc.</font></li>
<li><font size="5" face="Times New Roman">Do not bring any type of bluetooth devices & media devices like earphone,headphone etc.</font></li>
<li><font size="5" face="Times New Roman">If,any applicant does not able to fill up above requirements ,he/she will not eligible to attend admission test.</font></li>
<li><font size="5" face="Times New Roman">If,any applicant does not maintain above rules,he/she will be expelled from admission test.</font></li>
<li><font size="5" face="Times New Roman">If, any applicant catch red handed to break rules,the MBSTU authorities will take strong action against him/her.</font></li>
</ol>
  </fieldset>
</div>
<center>
<a href="javascript:window.print();" class="btn_start_exam">PRINT</a>

</html>



