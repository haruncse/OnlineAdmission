<?php
                                  

$ssc_roll=$_GET['ssc_roll'];
$ssc_board=$_GET['ssc_board'];
$ssc_year=$_GET['ssc_year'];

$hsc_roll=$_GET['hsc_roll'];
$hsc_board=$_GET['hsc_board'];
$hsc_year=$_GET['hsc_year'];
        

$host="localhost";
$username="root";
$password="";
$db_name="education_info";
$tbl_name="ssc_info";
$tbl_name2="hsc_info"; 

mysql_connect("$host","$username","$password")or die("can not connect");
mysql_select_db("$db_name")or die("can not connect DB");


/*
$roll=$_POST['ssc_roll'];
$board=$_POST['ssc_board'];
$year=$_POST['ssc_year'];
$roll1=$_POST['roll_num'];
$board1=$_POST['board'];
$year1=$_POST['year'];
*/

$sql="SELECT * FROM $tbl_name WHERE roll_num='$ssc_roll' and board='$ssc_board' and passing_year='$ssc_year'";
$sql1="SELECT * FROM $tbl_name2 WHERE roll_num='$hsc_roll' and board='$hsc_board' and passing_year='$hsc_year'";

?>