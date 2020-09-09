<?php

  
$host="localhost";
$username="root";
$password="";
$db_name="admissionproject";

// table name
$aplicant_education_info="aplicant_education_info";   
$aplicant_genaral_info="aplicant_genaral_info"; 
$aplicant_permanent_home_info="aplicant_permanent_home_info";
$aplicant_picture_signature="aplicant_picture_signatur";
$aplicant_present_home_info="aplicant_present_home_info";
//$aplicant_roll_result_info="aplicant_roll_result_info";

$user_name =$_POST['uname']; 
//echo"$user_name";
mysql_connect("$host","$username","$password")or die("can not connect");
mysql_select_db("$db_name")or die("can not connect DB");


        
         {
            /*
            $image1= addslashes($_FILES['" . $_POST["aplicant_image"] ."']['tmp_name']);
            $name1= addslashes($_FILES['aplicant_image']['name']);
            $image1= file_get_contents($image1);
            $image1= base64_encode($image1);
            */
                $user_name =$_POST['uname'];  
            $image1= addslashes($_FILES['aplicant_image']['tmp_name']);
            $name1= addslashes($_FILES['aplicant_image']['name']);
            $image1= file_get_contents($image1);
            $image1= base64_encode($image1);
            
            
            $image2= addslashes($_FILES['aplicant_signature']['tmp_name']);
            $name2= addslashes($_FILES['aplicant_signature']['name']);
            $image2= file_get_contents($image2);
            $image2= base64_encode($image2);
            saveimage($name1,$image1,$name2,$image2,$user_name);
        }
        
        function saveimage($name1,$image1,$name2,$image2,$user_name)
        {
            /*
         $qry="Insert into $aplicant_picture_signature(aplicant_image,aplicant_signature,aplicant_image_name,aplicant_signature_name)
          values('$image','$name')";  
          */ 
    $qry="Insert into aplicant_picture_signature
 (aplicant_image,aplicant_signature,aplicant_image_name,aplicant_signature_name,user_name)
          values('$image1','$image2','$user_name','$name2','$name1')";  
          mysql_query($qry);
          //echo"Image Uploaded";
        }




  $sql1="INSERT INTO $aplicant_education_info (ssc_gpa,hsc_gpa,user_name,unit) VALUES('" . $_POST["ssc_gpa"] . "','" . $_POST["hsc_gpa"] . "','$user_name','".$_POST["unit"]."')";

$sql2="INSERT INTO $aplicant_genaral_info (aplicant_name,aplicant_father_name,aplicant_mother_name,aplicant_birth_date,aplicant_gender,user_name)
 VALUES('" . $_POST["student_name"] . "','" . $_POST["father_name"] . "','" . $_POST["mother_name"] . "','" . $_POST["date_of_birth"] . "','" . $_POST["gender"] . "','$user_name')"; 
 
$sql3="INSERT INTO $aplicant_present_home_info (district_name,upazila_name,post_code,village_name,home_no,road_no,user_name) 
VALUES('" . $_POST["psdistrict"] . "','" . $_POST["psupazila"] . "','" . $_POST["pspostcode"] . "','" . $_POST["psvillage_name"] . "','" . $_POST["psroad_no"] . "','" . $_POST["pshome_no"] . "','$user_name')"; 


$sql5="INSERT INTO $aplicant_permanent_home_info (district_name,upazila_name,post_code,village_name,home_no,road_no,user_name) 
VALUES('" . $_POST["prdistrict"] . "','" . $_POST["prupazila"] . "','" . $_POST["prpostcode"] . "','" . $_POST["prvillage_name"] . "','" . $_POST["prroad_no"] . "','" . $_POST["prhome_no"] . "','$user_name')"; 

//echo "Your Data Inserted";

mysql_query($sql1);  
     
mysql_query($sql2);

mysql_query($sql3);
 
mysql_query($sql5); 
    

  // echo "value insert Success fully";
   mysql_close();
   


?> 

<html>
<body>
<h1><center> Aplication form has been submitted</center></h1>
<input type="hidden" name="uname" value="<?php echo"$user_name" ; ?>"> 
<form action="user_dashboard.php" method="get">
<center><input align="middle" type="submit" value="Click Here"></center>
</form>
</body>
</html>

 
