
<?php
$ssc_roll='';
$ssc_board='';            
$ssc_year='';
$hsc_roll='';
$hsc_board='';
$hsc_year='';
?>

<?php

//session_start();

$_SESSION['ssc_roll'] = $ssc_roll;
$_SESSION['ssc_board'] = $ssc_board;
$_SESSION['ssc_year'] = $ssc_year;

$_SESSION['hsc_roll'] = $hsc_roll;
$_SESSION['hsc_board'] = $hsc_board;
$_SESSION['hsc_year'] = $hsc_year;
$user_name =$_GET['uname']; 


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

$conn=mysqli_connect($host,$username,$password,$db_name)or die("can not connect");

//mysql_select_db(,"$db_name")or die("can not connect DB");
//$sql="SELECT * FROM $aplicant_education_info WHERE user_name='$user_name'";

$sql1="SELECT * FROM $aplicant_education_info WHERE user_name='$user_name'"; 
$sql2="SELECT * FROM $aplicant_genaral_info WHERE user_name='$user_name'";


$result=mysqli_query($conn,$sql1);
$result1=mysqli_query($conn,$sql2);   

$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result1); 

  
if($count==1 && $count1==1 )
{
   // header("Location:user_dashboard.php");
    $message=" You already fill up your aplication form"; 
    echo $message;
    header("Location:user_dashboard.php");
  
}
//echo"$user_name";
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
    <h2><center>Please Give SSC & HSC Information</center></h2>
    </div>


    <form method="get" action="findvalue.php"> 
    <div class="vill">
    <fieldset>
        <legend>SSC Information</legend>
        <span>Roll No:</span>
    <input type="text"  placeholder="Enter roll no."name="ssc_roll" required>
        Board:
    <select name="ssc_board">
        <option value="DHAKA">DHAKA</option>
        <option value="CHITTAGONG">CHITTAGONG</option>
        <option value="RAJSHAHI">RAJSHAHI</option>
        <option value="COMILLA">COMILLA</option>
        <option value="BARISAL">BARISAL</option>
        <option value="JESSORE">JESSORE</option>
        <option value="STLLHET">SYLLHET</option>
        <option value="MYMENSINGH">MYMENSINGH</option>
        <option value="DINAJPUR">DINAJPUR</option>
        <option value="MADRASHA">MADRASHA</option>
        <option value="VOCATIONAL">VOCATIONAL</option>
    </select>
        <span>Passing Year:</span>
        <select name="ssc_year">
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
    </select>
    </fieldset><br>
    </div>

    <div class="vill">
    <fieldset>
        <legend>HSC Information</legend>
        <span>Roll:</span>
        <input type="text"  placeholder="Enter roll no."name="hsc_roll" required>
        <span>Board:</span>
    <select name="hsc_board">
    <option value="DHAKA">DHAKA</option>
    <option value="CHITTAGONG">CHITTAGONG</option>
    <option value="RAJSHAHI">RAJSHAHI</option>
    <option value="COMILLA">COMILLA</option>
    <option value="BARISAL">BARISAL</option>
    <option value="JESSORE">JESSORE</option>
    <option value="STLLHET">SYLLHET</option>
    <option value="MYMENSINGH">MYMENSINGH</option>
    <option value="DINAJPUR">DINAJPUR</option>
    <option value="MADRASHA">MADRASHA</option>
    <option value="VOCATIONAL">VOCATIONAL</option>
    </select>
        Passing Year:
     <select name="hsc_year">
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    </select>

    </fieldset><br>
    </div>
    <table align="center">
    <tr align="center">
    <input type="hidden" name="uname" value="<?php echo"$user_name" ; ?>">      
    <td><input type="submit" name="submit" value="Submit" align="center"></td>  
    </tr>
    </table>
     
    </form>
     
    <form action="logout.php" method="post">
    <table align="center">
    <tr align="center">
    <td><input type="submit" align="middle" name="logout.php" value="Log Out"></td>  
    </tr>
    </table>
    <!--
    Welcome <?php//echo ".$_POST['uname']."; ?> Click here to <a href="logout.php" tite="Logout">Logout. 
    -->
    </form>
</body>
</head>
</html>