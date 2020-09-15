<?php
define('DB_NAME', 'admissionproject');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);
if (!$link) {
die('Could not connect: ' . mysql_error());
}

//$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
die('Can\'t use ' . DB_NAME . ':' . mysqli_error());
}
$value1 = $_POST['Post_Code'];
$value2 = $_POST['Village_Name'];
$value3 = $_POST['Road_No'];
$value4 = $_POST['Home_No'];


$sql = "INSERT INTO applicant_home_info (Post_Code,Village_Name,Road_No,Home_No) VALUES ('$value1','$value2','$value3','$value4')";

if (!mysqli_query($sql)) {
die('Error: ' . mysqli_error());
}




mysqli_close();
?>
<html>
<!-------------------------------------------HTML CODE BEGIN------------------------------->
<head>
<link rel="stylesheet" type="text/css" href="aplicant_info.css" /> 
 </head>
 
<center>
<h1>Application Form Of  A/B/C/D Unit</h1>
</center>

<body>
<form>



<font size="5" face="Times New Roman"><b>Student Name :</b>
 <input name="Student_Name" type="text" size="40" placeholder="Student Name"   >
<p class="sig2 style1"><strong>Upload Your Picture Size180 X 180 Pixel<br/>
  MAX 4MB
  
</strong><strong>
<input name="aplicant_image" type="file" size="20" accept="image/*">
</strong></p>
<br/>
<font size="5" face="Times New Roman"><b>Father's Name:</b>
 <input type="text" placeholder="Father's Name" name="Father_ Name" accept="required">
<br/>
<font size="5" face="Times New Roman"><b>Mother's Name:</b>
<input type="text" placeholder="Mother's Name" name="Mother_ Name">
<br/>
 
<h2>Date Of Birth:</h2>  <input type="date"  name="date">


<h2>Sex:</h2>
<input type="radio" name="sex" value="Male">Male</br>
<input type="radio" name="sex" value="Female">Female</br>
<input type="radio" name="sex" value="Others">Others
</form>


<form > 
<h2>SSC Information</h2><input type="text" placeholder="SSC Information" name="SSC Information">

<br/>
<h2>HSC Information</h2><input type="text" placeholder="HSC Information" name="HSC Information"><br/>
<h2>Present Address:</h2>
<p>District:
  <select>
      <option value="Dhaka">Dhaka</option>
      <option value="Munshiganj">Munshiganj</option>
      <option value="Gazipur">Gazipur</option>
      <option value="Narosingdi">Narosingdi</option>
      <option value="Kishoreganj">Kishorganj</option>
      <option value="Manikganj">Manikganj</option>
      <option value="Faridpur">Faridpur</option>
      <option value="Rajbari">Rajbari</option>
      <option value="Narayanganj">Narayanganj</option>
      <option value="Mymensingh">Mymensingh</option>
      <option value="Jamalpur">Jamalpur</option>
      <option value="Sherpur">Sherpur</option>
      <option value="Tangail">Tangail</option>
      <option value="Netrokona">Netrokona</option>
      <option value="Chittagong">Chittagong</option>
      <option value="Rangamati">Rangamati</option>
      <option value="Khagrachari">Khagrachari</option>
      <option value="Bandarban">Bandarban</option>
      <option value="Cox's Bazar">Cox's Bazar</option>
      <option value="Chandpur">Chandpur</option>
      <option value="Comilla">Comilla</option>
      <option value="Brahmanbaria">Brahmanbaria</option>
      <option value="Feni">Feni</option>
      <option value="Noakhali">Noakhali</option>
      <option value="Syllhet">Syllhet</option>
      <option value="MaulviBazar">MaulviBazar</option>
      <option value="Habiganj">Habiganj</option>
      <option value="Sunamganj">Sunamganj</option>
      <option value="Barisal">Barisal</option>
      <option value="Jhalokhati">Jhalokhati</option>
      <option value="Shariatpur">Shariatpur</option>
      <option value="Madaripur">Madaripur</option>
      <option value="Pirojpur">Pirojpur</option>
      <option value="Bhola">Bhola</option>
      <option value="Gopalganj">Gopalganj</option>
      <option value="Khulna">Khulna</option>
      <option value="Jessore">Jessore</option>
      <option value="Narail">Narail</option>
      <option value="Patuakhali">Patuakhali</option>
      <option value="Bagerhat">Bagerhat</option>
      <option value="Barguna">Barguna</option>
      <option value="Satkhira">Satkhira</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Sirajganj">Sirajganj</option>
      <option value="Natore">Natore</option>
      <option value="Nababganj">Nababganj</option>
      <option value="Naogaon">Naogaon</option>
      <option value="Chapainababganj">Chapainabganj</option>
      <option value="Bogra">Bogura</option>
      <option value="Gaibandha">Gaibandha</option>
      <option value="Pabna">Pabna</option>
      <option value="Magura">Magura</option>
      <option value="Joypurhat">Joypurhat</option>
      <option value="Kushtia">Kushtia</option>
      <option value="Jhenaidah">Jhenaidah</option>
      <option value="Meherpur">Meherpur</option>
      <option value="Chuadanga">Chuadanga</option>
      <option value="Rangpur">Rangpur</option>
      <option value="Kurigram">Kurigram</option>
      <option value="Dinajpur">Dinajpur</option>
      <option value="Panchagarh">Panchagarh</option>
      <option value="Lalmonirhat">Lalmornirhat</option>
      <option value="Thakurgaon">Thakurgaon</option>
      <option value="Nilphamari">Nilphamari</option>
    </select>
  Upazila:
  <select name="ujty">
    <option value="Baghaichori">Baghaichori</option>
    <option value="Baniachang">Baniachang</option>
    <option value="Banshkhali">Banshkhali</option>
    <option value="BangshalThana">BangshalThana</option>
    <option value="BanariparaThana">BanariparaThana</option>
    <option value="Barigram">Barigram</option>
    <option value="Barhatta">Barhatta</option>
    <option value="Barkal">Barkal</option>
    <option value="Barlekha">Barlekha</option>
    <option value="Barura">Barura</option>
    <option value="Basail">Basail</option>
    <option value="Batiaghat">Batiaghat</option>
    <option value="Bauphal">Bauphal</option>
    <option value="Beanibazar">Beanibazar</option>
    <option value="Begumganj">Begumganj</option>
    <option value="Belabo">Belabo</option>
    <option value="Belaichhari">Belaichhari</option>
    <option value="Belkuchi">Belkuchi</option>
    <option value="Bera">Bera</option>
    <option value="Betagi">Betagi</option>
    <option value="Bhairab">Bhairab</option>
    <option value="Bhaluka">Bhaluka</option>
    <option value="Bhandaria">Bhandaria</option>
    <option value="Bhanga">Bhanga</option>
    <option value="Bhangura">Bhangura</option>
    <option value="Bhedarganj">Bhedarganj</option>
    <option value="Bheramara">Bheramara</option>
    <option value="Bholahat">Bholahat</option>
    <option value="Bholasadar">Bholasadar</option>
    <option value="Bhuapur">Bhuapur</option>
    <option value="Bhurungamari">Bhurungamari</option>
    <option value="Bhuapur">Bhuapur</option>
    <option value="Birampur">Birampur</option>
    <option value="Birganj">Birganj</option>
    <option value="Biral">Biral</option>
    <option value="Bishwamvarpur">Bishwamnarpur</option>
    <option value="Bishwanathpur">Bishwanathpur</option>
    <option value="Boalkhali">Boalkhali</option>
    <option value="Boalmari">Boalmari</option>
    <option value="Bochaganj">Bochaganj</option>
    <option value="Boda">Boda</option>
    <option value="BograSadar">BograSadar</option>
    <option value="BrahmanbariaSadar">Brahmanbaria</option>
    <option value="Brahmanpara">Brahmanpara</option>
    <option value="Burhanuddin">Burhanuddin</option>
    <option value="Burichang">Burichang</option>
    <option value="Chakaria">Chakaria</option>
    <option value="Chandanaish">Chandanaish</option>
    <option value="Chandina">Chandina</option>
    <option value="ChandpurSadar">ChandpurSadar</option>
    <option value="Chabandrasan">Charbandrasan</option>
    <option value="Charfasson">Charfasson</option>
    <option value="Charghat">Charghat</option>
    <option value="Chatkhill">Chatkhill</option>
    <option value="Chatmohar">Chatmohar</option>
    <option value="Chauddagram">Chauddagram</option>
    <option value="Chaugachha">Chaugachha</option>
    <option value="Chauhali">Chauhali</option>
    <option value="Chhagalnaiya">Chhagalnaiya</option>
    <option value="Chhatak">Chhatak</option>
    <option value="Chilmari">Chilmari</option>
    <option value="Chitalmari">Chitalmari</option>
    <option value="ChuadangaSadar">ChuadangaSadar</option>
    <option value="Chunarughat">Chunarughat</option>
    <option value="Cox'sBazarSadar">Cox'sBazarSadar</option>
    <option value="Dacope">Dacope</option>
    <option value="Daganbhuiyan">Daganbhuiyan</option>
    <option value="Damudya">Damudya</option>
    <option value="Damurhuda">Damurhuda</option>
    <option value="Dashmina">Dashmina</option>
    <option value="Daudkandi">Daudkandi</option>
    <option value="Daulatkhan">Daulatkhan</option>
    <option value="Daulatpur">Daulatpur</option>
    <option value="Ddimla">Ddimla</option>
    <option value="Debhata">Debhata</option>
    <option value="Debidwar">Debidwar</option>
    <option value="Debiganj">Debiganj</option>
    <option value="Delduar">Delduar</option>
    <option value="Derai">Derai</option>
    <option value="Dewanganj">Dewanganj</option>
    <option value="Debhata">Debhata</option>
    <option value="Dhamoirhat">Dhamoirhat</option>
    <option value="Dhamrai">Dhamrai</option>
    <option value="Dharmapasha>Dharmapasha</option>
<option value="Dhobaura">Dhobaura</option>
    <option value="Dhunat">Dhunat</option>
    <option value="Dighalia">Dighalia</option>
    <option value="Dighinal">Dighinal</option>
    <option value="Dohar">Dohar</option>
    <option value="Domar">Domar</option>
    <option value="Dowarbazar">Dowarbazar</option>
    <option value="Dumuria">Dumuria</option>
    <option value="Dupchanchia">Dupchanchia</option>
    <option value="Durgapur(Netrokona)">Durgapur(Netrokona)</option>
    <option value="Durgapur(Rajshahi)">Durgapur(Rajshahi)</option>
    <option value="Fakirhat">Fakirhat</option>
    <option value="Faridganj">Faridganj</option>
    <option value="FaridpurSadar">FaridpurSadar</option>
    <option value="Fatikchhari">Fatikchhari</option>
    <option value="Fenchuganj">Fenchuganj</option>
    <option value="Fulbaria">Fulbaria</option>
    <option value="Fulchhari">Fulchhari</option>
    <option value="Gobtali">Gobtali</option>
    <option value="Goffargaon">Goffargaon</option>
    <option value="GaibandhaSadar">GaibandhaSadar</option>
    <option value="Golachipa">Golachipa</option>
    <option value="Gangni">Gangni</option>
    <option value="Gauripur">Gauripur</option>
    <option value="Gazaria">Gazaria</option>
    <option value="GazipurSadar">GazipurSadar</option>
    <option value="Ghatail">Ghatail</option>
    <option value="Ghior">Ghior</option>
    <option value="Ghoraghat">Ghoraghat</option>
    <option value="Goalandaghat">Goalandaghat</option>
    <option value="Gobindaganj">Gobindaganj</option>
    <option value="Godagari">Godagari</option>
    <option value="Golabganj">Golapganj</option>
    <option value="Gomastapur">Gomastapur</option>
    <option value="GopalganjSadar">GopalganjSadar</option>
    <option value="Gopalpur">Gopalpur</option>
    <option value="Gosairhat">Gosairhat</option>
    <option value="Gournadi">Gournadi</option>
    <option value="Gowainghat">Gowainghat</option>
    <option value="Gurudaspur">Gurudaspur</option>
    <option value="HabiganjSadar">HabiganjSadar</option>
    <option value="Haimchar">Haimchar</option>
    <option value="Hajiganj">Hajiganj</option>
    <option value="Hakimpur">Hakimpur</option>
    <option value="Haluaghat">Haluaghat</option>
    <option value="Harinakundal">Harinakundal</option>
    <option value="Haripur">Haripur</option>
    <option value="Harirampur">Harirampur</option>
    <option value="Hathazari">Hathazari</option>
    <option value="Hatibandha">Hatibandha</option>
    <option value="Hizla">Hizla</option>
    <option value="Homna">Homna</option>
    <option value="Hossainpur">Hossainpur</option>
    <option value="Ishwardi">Ishwardi</option>
    <option value="Islampur">Islampur</option>
    <option value="Itna">Itna</option>
    <option value="Jagannathpur">Jagannathpur</option>
    <option value="Jaintia">Jaintia</option>
    <option value="Jaldhaka">Jaldhaka</option>
    <option value="Jamalganj">Jamalganj</option>
    <option value="JamalpurSadar">JamalpurSadar</option>
    <option value="JessoreSadar">JessoreSadar</option>
    <option value="JhalokatiSadar">JhalokatiSadar</option>
    <option value="JhenaidahaSadar">JhenaidahaSadar</option>
    <option value="Jhenaigati">Jhenaigati</option>
    <option value="Jhikargachha">Jhikargachha</option>
    <option value="Jibannagar">Jibannagar</option>
    <option value="Kahaloo">Kahaloo</option>
    <option value="Kaharole">Kaharole</option>
    <option value="Kalai">Kalai</option>
    <option value="Kalipara">Kalipara</option>
    <option value="Kalaro">Kalaro</option>
    <option value="Kaliakair">Kaliakair</option>
    <option value="Kalia">Kalia</option>
    <option value="Kaliganj(Gazipur)">Kaliganj(Gazipur)</option>
    <option value="Kaliganj(Jhenaidaha)">kaliganj(Jhenaidaha)</option>
    <option value="Kaliganj(Satkhira)">Kaliganj(Satkhira)</option>
    <option value="Kalihahati">Kalihahati</option>
    <option value="Kalkini">Kalkini</option>
    <option value="Kalmakanda">Kalmakanda</option>
    <option value="Kamarkhanda">Kamarkhanda</option>
    <option value="Kamrangirchar">Kamrangirchar</option>
    <option value="Kanaighat">Kanaighat</option>
    <option value="Kapasia">Kapasia</option>
    <option value="Kaptail">Kaptail</option>
    <option value="Karimganj">Karimganj</option>
    <option value="Kashiani">Kashiani</option>
    <option value="Kathalia">Kathalia</option>
    <option value="Kanshat">Kanshat</option>
    <option value="Katiadi">Katiadi</option>
    <option value="Kaunia">Kaunia</option>
    <option value="Kawkhali(Pirojpur)">Kawkhali(Pirojpur)</option>
    <option value="Kawkhali(Rangamati)">Kawkhali(Pirojpur)</option>
    <option value="Kazipur">Kazipur</option>
    <option value="Kendua">Kendua</option>
    <option value="Keraniganj">Keraniganj</option>
    <option value="Keshabpur">Keshabpur</option>
    <option value="KhagrachariSadar">KhagrachariSadar</option>
    <option value="Khaliajuri">Khaliajuri</option>
    <option value="Khetla">Khetla</option>
    <option value="Khansama">Khansama</option>
    <option value="KishoreganjSadar">KishoregannjSadar</option>
    <option value="Kotaliapara">Kotaliapara</option>
    <option value="Kotchandpur">Kotchandpur</option>
    <option value="Koyra">Koyra</option>
    <option value="Kulaura">Kulaura</option>
    <option value="Kuliarchar">Kuliarchar</option>
    <option value="KurigramSadar">KurigramSadar</option>
    <option value="KushtiaSadar">KushtiaSadar</option>
    <option value="Kotowali">Kotowali</option>
    <option value="Kutubdia">Kutubdia</option>
    <option value="Lakhai">Lakhai</option>
    <option value="Laksham">Laksham</option>
    <option value="LakhmiBazarThana">LakshmiBazarThana</option>
    <option value="LakshmipurSadar">LakshmipurSadar</option>
    <option value="Lalmohan">Lalmohan</option>
    <option value="Langdu">Langdu</option>
    <option value="Lohagara(Chittagong)">Lohagara(Chittagong)</option>
    <option value="Lohagara(Narail)">Lohagara(Narail)</option>
    <option value="Madan">Madan</option>
    <option value="Madarganj">Madarganj</option>
    <option value="MadaripurSadar">MadaripurSadar</option>
    <option value="Madhabpur">Madhabpur</option>
    <option value="Madhukhali">Madhukhali</option>
    <option value="Madhupur">Madhupur</option>
    <option value="MaguraSadar">MaguraSadar</option>
    <option value="Mahadevpur">Mahadevpur</option>
    <option value="Maheshkhali">Maheshkhali</option>
    <option value="Mandal">Mandal</option>
    <option value="ManikganjSadar">ManikganjSadar</option>
    <option value="Manpura">Manpura</option>
    <option value="Mathbaria">Mathbaria</option>
    <option value="Matlab">Matlab</option>
    <option value="MaulviBazarSadar">MaulviBazarSadar</option>
    <option value="MeherpurSadar">MeherpurSadar</option>
    <option value="Mirzaganj">Mirzaganj</option>
    <option value="MirpurThana">MirpurThana</option>
    <option value="Mirsharai">Mirsaharai</option>
    <option value="Mirzapur">Mirzapur</option>
    <option value="Mithapukur">Mithapukur</option>
    <option value="Mohanpur">Mohanpur</option>
    <option value="Mollahat">Mollahat</option>
    <option value="Muladi">Muladi</option>
    <option value="MunshiganjSadar">MunshiganjSadar</option>
    <option value="MymensinghSadar">MymensinghSadar</option>
    <option value="Nabiganj">Nabiganj</option>
    <option value="Nabinagar">Nabinagar</option>
    <option value="Nachole">Nachole</option>
    <option value="Nagarpur">Nagarpur</option>
    <option value="Nageshwari">Nageshwari</option>
    <option value="Nalitabari">Nalitabari</option>
    <option value="Nandail">Nandail</option>
    <option value="NaogaonSadar">NaogaonSadar</option>
    <option value="NarailSadar">NarailSadar</option>
    <option value="NarayanganjSadar">NarayanganjSadar</option>
    <option value="NarsingdiSadar">NarsingdiSadar</option>
    <option value="NatoreSadar">NatoreSadar</option>
    <option value="Nawabganj">Nawabganj</option>
    <option value="Nazirpur">Nazirpur</option>
    <option value="Nesarabad(Swarupkhati)">Nesarabad(Swarupkhati)</option>
    <option value="NetrokonaSadar">NetrokonaSadar</option>
    <option value="NilphamariSadar">NilphamariSadar</option>
    <option value="NoakhaliSadar">NoakhaliSadar</option>
    <option value="PabnaSadar">PabnaSadar</option>
    <option value="Paikgacha">Paikgacha</option>
    <option value="Pakundia">Pakundia</option>
    <option value="Palash">Palash</option>
    <option value="PalashBari">PalashBari</option>
    <option value="PanchagarSadar">PanchagarSadar</option>
    <option value="Parbatipur">Parbatipur</option>
    <option value="Parshuram">Parshuram</option>
    <option value="Patgram">Patgram</option>
    <option value="PahartoliThana">PahartoliThana</option>
    <option value="Patharghata">Patharghata</option>
    <option value="Patiya">Patiya</option>
    <option value="PatuakhaliSadar">PatuakhaliSadar</option>
    <option value="Phulbari(Kurigram)">Phulbari(Kurigram)</option>
    <option value="Phulbari(Dinajpur)">Phulbari(Dinajpur)</option>
    <option value="Phulpur">Phulpur</option>
    <option value="Phultala">Phultala</option>
    <option value="Pirganj(Thakurgaon)">Pirganj(Thakurgaon)</option>
    <option value="Pirganj(Rangpur)">Pirganj(Rangpur)</option>
    <option value="PirojpurSadar">PirojpurSadar</option>
    <option value="Raiganj">Raiganj</option>
    <option value="Raipura">Raipura</option>
    <option value="Rajapur">Rajapur</option>
    <option value="Rajarhat">Rajarhat</option>
    <option value="Rajasthali">Rajasthali</option>
    <option value="RajbariSadar">RajbariSadar</option>
    <option value="Rajnagar">Rajnagar</option>
    <option value="Ramganj">Ramganj</option>
    <option value="Ramgati">Ramgati</option>
    <option value="RamnaThana">RamnaThana</option>
    <option value="Rampal">Rampal</option>
    <option value="Ramu">Ramu</option>
    <option value="RangamatiSadar">RangamatiSadar</option>
    <option value="RangpurSadar">RangpurSadar</option>
    <option value="Raninagar">Raninagar</option>
    <option value="Ranihati">Ranihati</option>
    <option value="Raozan">Raozan</option>
    <option value="Raumari">Raumari</option>
    <option value="Rupganj">Rupganj</option>
    <option value="Rupsa">Rupsa</option>
    <option value="SabujbaghThana">SabujbaghThana</option>
    <option value="Sadarpur">Sadarpur</option>
    <option value="Saidpur">Saidpur</option>
    <option value="Sakhipur">Sakhipur</option>
    <option value="Salikha">Salikha</option>
    <option value="ShahbagThana">ShahbagThana</option>
    <option value="Santhia">Santhia</option>
    <option value="Sarail">Sarail</option>
    <option value="Sariakandi">Sariakandi</option>
    <option value="Sarishabari">Sarishabari</option>
    <option value="SatkhiraSadar">SatkhiraSadar</option>
    <option value="Saturia">Saturia</option>
    <option value="Savar">Savar</option>
    <option value="Shahjadpur">Shahjadpur</option>
    <option value="Shailkupa">Shailkupa</option>
    <option value="ShariatpurSadar">ShariatpurSadar</option>
    <option value="SherpurSadar">SherpurSadar</option>
    <option value="Shibganj(Chapainawabganj)">Shibganj(Chapainawabganj)</option>
    <option value="Shibganj(Bogra)">Shibganj(Bogra)</option>
    <option value="ShyampurThana">ShyampurThana</option>
    <option value="Singair">Singair</option>
    <option value="Sikarpur">Sikarpur</option>
    <option value="Singra">Singra</option>
    <option value="SirajganjSadar">SirajganjSadar</option>
    <option value="Sitakunda">Sitakunda</option>
    <option value="SonadangaThana">SonadangaThana</option>
    <option value="Sonatola">Sonatola</option>
    <option value="Sonargaon">Sonargaon</option>
    <option value="Sreemangal">Sreemangal</option>
    <option value="Sreenagar">Sreenagar</option>
    <option value="Sreepur(Gazipur)">Sreepur(Gazipur)</option>
    <option value="Sreepur(Magura)">Sreepur(Magura)</option>
    <option value="SunamganjSadar">SunamganjSadar</option>
    <option value="Sundarban">Sundarban</option>
    <option value="Sundarganj">Sundarganj</option>
    <option value="SutrapurThana">SutrapurThana</option>
    <option value="SyllhetSadar">SyllhetSadar</option>
    <option value="Tahirpur">Tahirpur</option>
    <option value="Tanore">Tanore</option>
    <option value="TangailSadar">TangailSadar</option>
    <option value="TejgaonThana">TejgaonThana</option>
    <option value="Tentulia">Tentulia</option>
    <option value="ThakurgaonSadar">ThakurgaonSadar</option>
    <option value="Teknaf">Teknaf</option>
    <option value="Uttara">Uttara</option>
    <option value="Uzirpur">Uzirpur</option>
  </select>
  <br/>
  <font size="5" face="Times New Roman">Village Name:</font>
  <input name="Village Name" type="text" size="50" placeholder="Village Name">
  <font size="5" face="Times New Roman">Road:</font>
  <input type="text" placeholder="Road Name" name="Road Name">
</p>
<p><font size="5" face="Times New Roman">Home:</font>
  <input type="text" placeholder="Home Name" name="Home Name">
  </p>
<p><font size="5" face="Times New Roman">Post Code:</font>
  <input type="text" placeholder="Post Code" name="Post Code">
  </br>
</p>

<h2>Permanent Address</h2>
<div align="justify">District:
  <select>
      <option value="Dhaka">Dhaka</option>
      <option value="Munshiganj">Munshiganj</option>
      <option value="Gazipur">Gazipur</option>
      <option value="Narosingdi">Narosingdi</option>
      <option value="Kishoreganj">Kishorganj</option>
      <option value="Manikganj">Manikganj</option>
      <option value="Faridpur">Faridpur</option>
      <option value="Rajbari">Rajbari</option>
      <option value="Narayanganj">Narayanganj</option>
      <option value="Mymensingh">Mymensingh</option>
      <option value="Jamalpur">Jamalpur</option>
      <option value="Sherpur">Sherpur</option>
      <option value="Tangail">Tangail</option>
      <option value="Netrokona">Netrokona</option>
      <option value="Chittagong">Chittagong</option>
      <option value="Rangamati">Rangamati</option>
      <option value="Khagrachari">Khagrachari</option>
      <option value="Bandarban">Bandarban</option>
      <option value="Cox's Bazar">Cox's Bazar</option>
      <option value="Chandpur">Chandpur</option>
      <option value="Comilla">Comilla</option>
      <option value="Brahmanbaria">Brahmanbaria</option>
      <option value="Feni">Feni</option>
      <option value="Noakhali">Noakhali</option>
      <option value="Syllhet">Syllhet</option>
      <option value="MaulviBazar">MaulviBazar</option>
      <option value="Habiganj">Habiganj</option>
      <option value="Sunamganj">Sunamganj</option>
      <option value="Barisal">Barisal</option>
      <option value="Magura">Magura</option>
      <option value="Jhalokhati">Jhalokhati</option>
      <option value="Shariatpur">Shariatpur</option>
      <option value="Madaripur">Madaripur</option>
      <option value="Pirojpur">Pirojpur</option>
      <option value="Bhola">Bhola</option>
      <option value="Gopalganj">Gopalganj</option>
      <option value="Khulna">Khulna</option>
      <option value="Jessore">Jessore</option>
      <option value="Narail">Narail</option>
      <option value="Patuakhali">Patuakhali</option>
      <option value="Bagerhat">Bagerhat</option>
      <option value="Barguna">Barguna</option>
      <option value="Satkhira">Satkhira</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Sirajganj">Sirajganj</option>
      <option value="Natore">Natore</option>
      <option value="Nababganj">Nababganj</option>
      <option value="Naogaon">Naogaon</option>
      <option value="Chapainababganj">Chapainabganj</option>
      <option value="Bogra">Bogura</option>
      <option value="Gaibandha">Gaibandha</option>
      <option value="Pabna">Pabna</option>
      <option value="Joypurhat">Joypurhat</option>
      <option value="Kushtia">Kushtia</option>
      <option value="Jhenaidah">Jhenaidah</option>
      <option value="Meherpur">Meherpur</option>
      <option value="Chuadanga">Chuadanga</option>
      <option value="Rangpur">Rangpur</option>
      <option value="Kurigram">Kurigram</option>
      <option value="Dinajpur">Dinajpur</option>
      <option value="Panchagarh">Panchagarh</option>
      <option value="Lalmonirhat">Lalmornirhat</option>
      <option value="Thakurgaon">Thakurgaon</option>
      <option value="Nilphamari">Nilphamari</option>
    </select>
  Upazila:
  <select>
    
    <option value="Baghaichori">Baghaichori</option>
    <option value="Baniachang">Baniachang</option>
    <option value="Banshkhali">Banshkhali</option>
    <option value="BangshalThana">BangshalThana</option>
    <option value="BanariparaThana">BanariparaThana</option>
    <option value="Barigram">Barigram</option>
    <option value="Barhatta">Barhatta</option>
    <option value="Barkal">Barkal</option>
    <option value="Barlekha">Barlekha</option>
    <option value="Barura">Barura</option>
    <option value="Basail">Basail</option>
    <option value="Batiaghat">Batiaghat</option>
    <option value="Bauphal">Bauphal</option>
    <option value="Beanibazar">Beanibazar</option>
    <option value="Begumganj">Begumganj</option>
    <option value="Belabo">Belabo</option>
    <option value="Belaichhari">Belaichhari</option>
    <option value="Belkuchi">Belkuchi</option>
    <option value="Bera">Bera</option>
    <option value="Betagi">Betagi</option>
    <option value="Bhairab">Bhairab</option>
    <option value="Bhaluka">Bhaluka</option>
    <option value="Bhandaria">Bhandaria</option>
    <option value="Bhanga">Bhanga</option>
    <option value="Bhangura">Bhangura</option>
    <option value="Bhedarganj">Bhedarganj</option>
    <option value="Bheramara">Bheramara</option>
    <option value="Bholahat">Bholahat</option>
    <option value="Bholasadar">Bholasadar</option>
    <option value="Bhuapur">Bhuapur</option>
    <option value="Belaichhari">Belaichhari</option>
    <option value="Belkuchi">Belkuchi</option>
    <option value="Bera">Bera</option>
    <option value="Betagi">Betagi</option>
    <option value="Bhairab">Bhairab</option>
    <option value="Bhaluka">Bhaluka</option>
    <option value="Bhandaria">Bhandaria</option>
    <option value="Bhanga">Bhanga</option>
    <option value="Bhangura">Bhangura</option>
    <option value="Bhedarganj">Bhedarganj</option>
    <option value="Bheramara">Bheramara</option>
    <option value="Bholahat">Bholahat</option>
    <option value="Bholasadar">Bholasadar</option>
    <option value="Bhuapur">Bhuapur</option>
    <option value="Bhurungamari">Bhurungamari</option>
    <option value="Bhuapur">Bhuapur</option>
    <option value="Birampur">Birampur</option>
    <option value="Birganj">Birganj</option>
    <option value="Biral">Biral</option>
    <option value="Bishwamvarpur">Bishwamnarpur</option>
    <option value="Bishwanathpur">Bishwanathpur</option>
    <option value="Boalkhali">Boalkhali</option>
    <option value="Boalmari">Boalmari</option>
    <option value="Bochaganj">Bochaganj</option>
    <option value="Boda">Boda</option>
    <option value="BograSadar">BograSadar</option>
    <option value="BrahmanbariaSadar">Brahmanbaria</option>
    <option value="Brahmanpara">Brahmanpara</option>
    <option value="Burhanuddin">Burhanuddin</option>
    <option value="Burichang">Burichang</option>
    <option value="Chakaria">Chakaria</option>
    <option value="Chandanaish">Chandanaish</option>
    <option value="Chandina">Chandina</option>
    <option value="ChandpurSadar">ChandpurSadar</option>
    <option value="Chabandrasan">Charbandrasan</option>
    <option value="Charfasson">Charfasson</option>
    <option value="Charghat">Charghat</option>
    <option value="Chatkhill">Chatkhill</option>
    <option value="Chatmohar">Chatmohar</option>
    <option value="Chauddagram">Chauddagram</option>
    <option value="Chaugachha">Chaugachha</option>
    <option value="Chauhali">Chauhali</option>
    <option value="Chhagalnaiya">Chhagalnaiya</option>
    <option value="Chhatak">Chhatak</option>
    <option value="Chilmari">Chilmari</option>
    <option value="Chitalmari">Chitalmari</option>
    <option value="ChuadangaSadar">ChuadangaSadar</option>
    <option value="Chunarughat">Chunarughat</option>
    <option value="Cox'sBazarSadar">Cox'sBazarSadar</option>
    <option value="Dacope">Dacope</option>
    <option value="Daganbhuiyan">Daganbhuiyan</option>
    <option value="Damudya">Damudya</option>
    <option value="Damurhuda">Damurhuda</option>
    <option value="Dashmina">Dashmina</option>
    <option value="Daudkandi">Daudkandi</option>
    <option value="Daulatkhan">Daulatkhan</option>
    <option value="Daulatpur">Daulatpur</option>
    <option value="Ddimla">Ddimla</option>
    <option value="Debhata">Debhata</option>
    <option value="Debidwar">Debidwar</option>
    <option value="Debiganj">Debiganj</option>
    <option value="Delduar">Delduar</option>
    <option value="Derai">Derai</option>
    <option value="Dewanganj">Dewanganj</option>
    <option value="Debhata">Debhata</option>
    <option value="Dhunat">Dhunat</option>
    <option value="Dhamoirhat">Dhamoirhat</option>
    <option value="Dhamrai">Dhamrai</option>
    <option value="Dharmapasha">Dharmapasha</option>
    <option value="Dhobaura">Dhobaura</option>
    <option value="Dhunat">Dhunat</option>
    <option value="Dighalia">Dighalia</option>
    <option value="Dighinal">Dighinal</option>
    <option value="Dohar">Dohar</option>
    <option value="Domar">Domar</option>
    <option value="Dowarbazar">Dowarbazar</option>
    <option value="Dumuria">Dumuria</option>
    <option value="Dupchanchia">Dupchanchia</option>
    <option value="Durgapur(Netrokona)">Durgapur(Netrokona)</option>
    <option value="Durgapur(Rajshahi)">Durgapur(Rajshahi)</option>
    <option value="Fakirhat">Fakirhat</option>
    <option value="Faridganj">Faridganj</option>
    <option value="FaridpurSadar">FaridpurSadar</option>
    <option value="Fatikchhari">Fatikchhari</option>
    <option value="Fenchuganj">Fenchuganj</option>
    <option value="Fulbaria">Fulbaria</option>
    <option value="Fulchhari">Fulchhari</option>
    <option value="Gobtali">Gobtali</option>
    <option value="Goffargaon">Goffargaon</option>
    <option value="GaibandhaSadar">GaibandhaSadar</option>
    <option value="Golachipa">Golachipa</option>
    <option value="Gangni">Gangni</option>
    <option value="Gauripur">Gauripur</option>
    <option value="Gazaria">Gazaria</option>
    <option value="GazipurSadar">GazipurSadar</option>
    <option value="Ghatail">Ghatail</option>
    <option value="Ghior">Ghior</option>
    <option value="Ghoraghat">Ghoraghat</option>
    <option value="Goalandaghat">Goalandaghat</option>
    <option value="Gobindaganj">Gobindaganj</option>
    <option value="Godagari">Godagari</option>
    <option value="Golabganj">Golapganj</option>
    <option value="Gomastapur">Gomastapur</option>
    <option value="GopalganjSadar">GopalganjSadar</option>
    <option value="Gopalpur">Gopalpur</option>
    <option value="Gosairhat">Gosairhat</option>
    <option value="Gournadi">Gournadi</option>
    <option value="Gowainghat">Gowainghat</option>
    <option value="Gurudaspur">Gurudaspur</option>
    <option value="HabiganjSadar">HabiganjSadar</option>
    <option value="Haimchar">Haimchar</option>
    <option value="Hajiganj">Hajiganj</option>
    <option value="Hakimpur">Hakimpur</option>
    <option value="Haluaghat">Haluaghat</option>
    <option value="Harinakundal">Harinakundal</option>
    <option value="Haripur">Haripur</option>
    <option value="Harirampur">Harirampur</option>
    <option value="Hathazari">Hathazari</option>
    <option value="Hatibandha">Hatibandha</option>
    <option value="Hizla">Hizla</option>
    <option value="Homna">Homna</option>
    <option value="Hossainpur">Hossainpur</option>
    <option value="Ishwardi">Ishwardi</option>
    <option value="Islampur">Islampur</option>
    <option value="Itna">Itna</option>
    <option value="Jagannathpur">Jagannathpur</option>
    <option value="Jaintia">Jaintia</option>
    <option value="Jaldhaka">Jaldhaka</option>
    <option value="Jamalganj">Jamalganj</option>
    <option value="JamalpurSadar">JamalpurSadar</option>
    <option value="JessoreSadar">JessoreSadar</option>
    <option value="JhalokatiSadar">JhalokatiSadar</option>
    <option value="JhenaidahaSadar">JhenaidahaSadar</option>
    <option value="Jhenaigati">Jhenaigati</option>
    <option value="Jhikargachha">Jhikargachha</option>
    <option value="Jibannagar">Jibannagar</option>
    <option value="Kahaloo">Kahaloo</option>
    <option value="Kaharole">Kaharole</option>
    <option value="Kalai">Kalai</option>
    <option value="Kalipara">Kalipara</option>
    <option value="Kalaro">Kalaro</option>
    <option value="Kaliakair">Kaliakair</option>
    <option value="Kalia">Kalia</option>
    <option value="Kaliganj(Gazipur)">Kaliganj(Gazipur)</option>
    <option value="Kaliganj(Jhenaidaha)">kaliganj(Jhenaidaha)</option>
    <option value="Kaliganj(Satkhira)">Kaliganj(Satkhira)</option>
    <option value="Kalihahati">Kalihahati</option>
    <option value="Kalkini">Kalkini</option>
    <option value="Kalmakanda">Kalmakanda</option>
    <option value="Kamarkhanda">Kamarkhanda</option>
    <option value="Kamrangirchar">Kamrangirchar</option>
    <option value="Kanaighat">Kanaighat</option>
    <option value="Kapasia">Kapasia</option>
    <option value="Kaptail">Kaptail</option>
    <option value="Karimganj">Karimganj</option>
    <option value="Kashiani">Kashiani</option>
    <option value="Kathalia">Kathalia</option>
    <option value="Kanshat">Kanshat</option>
    <option value="Katiadi">Katiadi</option>
    <option value="Kaunia">Kaunia</option>
    <option value="Kawkhali(Pirojpur)">Kawkhali(Pirojpur)</option>
    <option value="Kawkhali(Rangamati)">Kawkhali(Pirojpur)</option>
    <option value="Kazipur">Kazipur</option>
    <option value="Kendua">Kendua</option>
    <option value="Keraniganj">Keraniganj</option>
    <option value="Keshabpur">Keshabpur</option>
    <option value="KhagrachariSadar">KhagrachariSadar</option>
    <option value="Khaliajuri">Khaliajuri</option>
    <option value="Khetla">Khetla</option>
    <option value="Khansama">Khansama</option>
    <option value="KishoreganjSadar">KishoregannjSadar</option>
    <option value="Kotaliapara">Kotaliapara</option>
    <option value="Kotchandpur">Kotchandpur</option>
    <option value="Koyra">Koyra</option>
    <option value="Kulaura">Kulaura</option>
    <option value="Kuliarchar">Kuliarchar</option>
    <option value="KurigramSadar">KurigramSadar</option>
    <option value="KushtiaSadar">KushtiaSadar</option>
    <option value="KotowaliThana">KotowaliThana</option>
    <option value="Kutubdia">Kutubdia</option>
    <option value="Lakhai">Lakhai</option>
    <option value="Laksham">Laksham</option>
    <option value="LakhmiBazarThana">LakshmiBazarThana</option>
    <option value="LakshmipurSadar">LakshmipurSadar</option>
    <option value="Dhamoirhat">Dhamoirhat</option>
    <option value="Dhamrai">Dhamrai</option>
    <option value="Dharmapasha">Dharmapasha</option>
    <option value="Dhobaura">Dhobaura</option>
    <option value="Dhunat">Dhunat</option>
    <option value="Dighalia">Dighalia</option>
    <option value="Dighinal">Dighinal</option>
    <option value="Dohar">Dohar</option>
    <option value="Domar">Domar</option>
    <option value="Dowarbazar">Dowarbazar</option>
    <option value="Dumuria">Dumuria</option>
    <option value="Dupchanchia">Dupchanchia</option>
    <option value="Lalmohan">Lalmohan</option>
    <option value="Langdu">Langdu</option>
    <option value="Lohagara(Chittagong)">Lohagara(Chittagong)</option>
    <option value="Lohagara(Narail)">Lohagara(Narail)</option>
    <option value="Madan">Madan</option>
    <option value="Madarganj">Madarganj</option>
    <option value="MadaripurSadar">MadaripurSadar</option>
    <option value="Madhabpur">Madhabpur</option>
    <option value="Madhukhali">Madhukhali</option>
    <option value="Madhupur">Madhupur</option>
    <option value="MaguraSadar">MaguraSadar</option>
    <option value="Mahadevpur">Mahadevpur</option>
    <option value="Maheshkhali">Maheshkhali</option>
    <option value="Mandal">Mandal</option>
    <option value="ManikganjSadar">ManikganjSadar</option>
    <option value="Manpura">Manpura</option>
    <option value="Mathbaria">Mathbaria</option>
    <option value="Matlab">Matlab</option>
    <option value="MaulviBazarSadar">MaulviBazarSadar</option>
    <option value="MeherpurSadar">MeherpurSadar</option>
    <option value="Mirzaganj">Mirzaganj</option>
    <option value="MirpurThana">MirpurThana</option>
    <option value="Mirsharai">Mirsaharai</option>
    <option value="Mirzapur">Mirzapur</option>
    <option value="Mithapukur">Mithapukur</option>
    <option value="Mohanpur">Mohanpur</option>
    <option value="Mollahat">Mollahat</option>
    <option value="Muladi">Muladi</option>
    <option value="MunshiganjSadar">MunshiganjSadar</option>
    <option value="MymensinghSadar">MymensinghSadar</option>
    <option value="Nabiganj">Nabiganj</option>
    <option value="Nabinagar">Nabinagar</option>
    <option value="Nachole">Nachole</option>
    <option value="Nagarpur">Nagarpur</option>
    <option value="Nageshwari">Nageshwari</option>
    <option value="Nalitabari">Nalitabari</option>
    <option value="Nandail">Nandail</option>
    <option value="NaogaonSadar">NaogaonSadar</option>
    <option value="NarailSadar">NarailSadar</option>
    <option value="NarayanganjSadar">NarayanganjSadar</option>
    <option value="NarsingdiSadar">NarsingdiSadar</option>
    <option value="NatoreSadar">NatoreSadar</option>
    <option value="Nawabganj">Nawabganj</option>
    <option value="Nazirpur">Nazirpur</option>
    <option value="Nesarabad(Swarupkhati)">Nesarabad(Swarupkhati)</option>
    <option value="NetrokonaSadar">NetrokonaSadar</option>
    <option value="NilphamariSadar">NilphamariSadar</option>
    <option value="NoakhaliSadar">NoakhaliSadar</option>
    <option value="PabnaSadar">PabnaSadar</option>
    <option value="Paikgacha">Paikgacha</option>
    <option value="Pakundia">Pakundia</option>
    <option value="Palash">Palash</option>
    <option value="PalashBari">PalashBari</option>
    <option value="PanchagarSadar">PanchagarSadar</option>
    <option value="Parbatipur">Parbatipur</option>
    <option value="Parshuram">Parshuram</option>
    <option value="Patgram">Patgram</option>
    <option value="PahartoliThana">PahartoliThana</option>
    <option value="Patharghata">Patharghata</option>
    <option value="Patiya">Patiya</option>
    <option value="PatuakhaliSadar">PatuakhaliSadar</option>
    <option value="Phulbari(Kurigram)">Phulbari(Kurigram)</option>
    <option value="Phulbari(Dinajpur)">Phulbari(Dinajpur)</option>
    <option value="Phulpur">Phulpur</option>
    <option value="Phultala">Phultala</option>
    <option value="Pirganj(Thakurgaon)">Pirganj(Thakurgaon)</option>
    <option value="Pirganj(Rangpur)">Pirganj(Rangpur)</option>
    <option value="PirojpurSadar">PirojpurSadar</option>
    <option value="Raiganj">Raiganj</option>
    <option value="Raipura">Raipura</option>
    <option value="Rajapur">Rajapur</option>
    <option value="Rajarhat">Rajarhat</option>
    <option value="Rajasthali">Rajasthali</option>
    <option value="RajbariSadar">RajbariSadar</option>
    <option value="Rajnagar">Rajnagar</option>
    <option value="Ramganj">Ramganj</option>
    <option value="Ramgati">Ramgati</option>
    <option value="RamnaThana">RamnaThana</option>
    <option value="Rampal">Rampal</option>
    <option value="Ramu">Ramu</option>
    <option value="RangamatiSadar">RangamatiSadar</option>
    <option value="RangpurSadar">RangpurSadar</option>
    <option value="Raninagar">Raninagar</option>
    <option value="Ranihati">Ranihati</option>
    <option value="Raozan">Raozan</option>
    <option value="Raumari">Raumari</option>
    <option value="Rupganj">Rupganj</option>
    <option value="Rupsa">Rupsa</option>
    <option value="SabujbaghThana">SabujbaghThana</option>
    <option value="Sadarpur">Sadarpur</option>
    <option value="Saidpur">Saidpur</option>
    <option value="Sakhipur">Sakhipur</option>
    <option value="Salikha">Salikha</option>
    <option value="ShahbagThana">ShahbagThana</option>
    <option value="Santhia">Santhia</option>
    <option value="Sarail">Sarail</option>
    <option value="Sariakandi">Sariakandi</option>
    <option value="Sarishabari">Sarishabari</option>
    <option value="SatkhiraSadar">SatkhiraSadar</option>
    <option value="Saturia">Saturia</option>
    <option value="Savar">Savar</option>
    <option value="Shahjadpur">Shahjadpur</option>
    <option value="Shailkupa">Shailkupa</option>
    <option value="ShariatpurSadar">ShariatpurSadar</option>
    <option value="SherpurSadar">SherpurSadar</option>
    <option value="Shibganj(Chapainawabganj)">Shibganj(Chapainawabganj)</option>
    <option value="Shibganj(Bogra)">Shibganj(Bogra)</option>
    <option value="ShyampurThana">ShyampurThana</option>
    <option value="Singair">Singair</option>
    <option value="Sikarpur">Sikarpur</option>
    <option value="Singra">Singra</option>
    <option value="SirajganjSadar">SirajganjSadar</option>
    <option value="Sitakunda">Sitakunda</option>
    <option value="SonadangaThana">SonadangaThana</option>
    <option value="Sonatola">Sonatola</option>
    <option value="Sonargaon">Sonargaon</option>
    <option value="Sreemangal">Sreemangal</option>
    <option value="Sreenagar">Sreenagar</option>
    <option value="Sreepur(Gazipur)">Sreepur(Gazipur)</option>
    <option value="Sreepur(Magura)">Sreepur(Magura)</option>
    <option value="SunamganjSadar">SunamganjSadar</option>
    <option value="Sundarban">Sundarban</option>
    <option value="Sundarganj">Sundarganj</option>
    <option value="SutrapurThana">SutrapurThana</option>
    <option value="SyllhetSadar">SyllhetSadar</option>
    <option value="Tahirpur">Tahirpur</option>
    <option value="Tanore">Tanore</option>
    <option value="TangailSadar">TangailSadar</option>
    <option value="TejgaonThana">TejgaonThana</option>
    <option value="Tentulia">Tentulia</option>
    <option value="ThakurgaonSadar">ThakurgaonSadar</option>
    <option value="Teknaf">Teknaf</option>
    <option value="Uttara">Uttara</option>
    <option value="Uzirpur">Uzirpur</option>
  </select>
  
  </br>
  <font size="5" face="Times New Roman">Village:</font>
  <input type="text" placeholder="Village Name" name="Village_Name">
  <font size="5" face="Times New Roman">Road:</font>
  <input type="text" placeholder="Road No" name="Road_No">
  <font size="5" face="Times New Roman">Home:</font>
  <input type="text" placeholder="Home No" name="Home_No">
  <font size="5" face="Times New Roman">Post Code:</font>
  <input type="text" placeholder="Post Code" name="Post_Code">
  </br>
  </br>
  </br>
  </br>
 
</div>

<p class="sig">Upload Your Signature<br/>
  Size 300 X 90 PIXEL<br/>MAX 4MB<strong>
  <input name="aplicant_signature2" type="file" accept="image/*" size="20">
</strong></p>
</br>

<center>
</strong></p>
  
</strong></p>
    <br/>
    
    <br/>
    <br/>
    <br/>
</div>
</form>
<form action="">

 <!---- <form action="4th page.html">---->
 <input name="SUBMIT" type="submit" class="sig" value="SUBMIT">
</form>
<!-----------------------------------------HTML CODE FINISH----------------------------------->
</html>   