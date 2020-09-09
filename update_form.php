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
<h2><center>Admission Form</center></h2>
</div>

<div class="vill">
<form action="action_page.php">
<fieldset>
<legend>Personal information</legend>
Name:<br>
<input type="text" name="name" value="name"><br>
Father's name:<br>
<input type="text" name="fname" value="father's name"><br>
Mother's name:<br>
<input type="text" name="mname" value="mother's name"><br>
Date of birth:<br>
Day:<select name="day">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
Month:<select name="month">
<option value="jan">January</option>
<option value="feb">Febryary</option>
<option value="mar">March</option>
<option value="epr">Epril</option>
<option value="may">May</option>
<option value="jun">June</option>
<option value="jul">July</option>
<option value="aug">August</option>
<option value="sep">September</option>
<option value="oct">October</option>
<option value="nov">November</option>
<option value="dec">December</option>
</select>
Year:<select name="year">
<option value="1">1990</option>
<option value="2">1991</option>
<option value="3">1992</option>
<option value="4">1993</option>
<option value="5">1994</option>
<option value="6">1995</option>
<option value="7">1996</option>
<option value="8">1997</option>
<option value="9">1998</option>
<option value="10">1999r</option>
<option value="11">2000</option>
<option value="12">2001</option>
</select><br>
Sex:<br>

<input type="radio" name="sex" value="male">Male
<br>
<input type="radio" name="sex" value="female">Female
</form>

</fieldset>
</div>s

<div class="vill">
<form action="action_page.php">
<fieldset>
    <legend>Address</legend>
    <span>Post</span><br><input type="text" value="post"><br>
    <span>Vill</span><br><input type="text" value="vill"><br>
    <span>City</span><br><input type="text" value="city"><br>
    <span>Postal Code</span><br><input type="text" value="postal code"><br>

</fieldset><br>
</from>
</div>

<div class="vill">
<form action="action_page.php">
<fieldset>
    <legend>SSC Information</legend>
    <span>Roll:</span><input type="text" value="roll">
    <span>Passing Year:</span><input type="text" value="year">
    Board:<select name="Board">
    <option value="dhaka">Dhaka</option>
    <option value="mymenshingh">Mymensingh</option>
    <option value="comilla">Comilla</option>
    <option value="rajshahi">Rajshahi</option>
    <option value="dinajpur">Dinajpur</option>
    <option value="sylhet">Sylhet</option>
    <option value="joshor">Joshohor</option>
    <option value="citagong">Chitagong</option>
</select>
    <span>GPA:</span><input type="text" value="gpa">

</fieldset><br>
</form>
</div>

<div class="vill">
<form action="action_page.php">
<fieldset>
    <legend>HSC Information</legend>
    <span>Roll:</span><input type="text" value="roll">
    <span>Passing Year:</span><input type="text" value="year">
    Board:<select name="Board">
    <option value="dhaka">Dhaka</option>
    <option value="mymenshingh">Mymensingh</option>
    <option value="comilla">Comilla</option>
    <option value="rajshahi">Rajshahi</option>
    <option value="dinajpur">Dinajpur</option>
    <option value="sylhet">Sylhet</option>
    <option value="joshor">Joshohor</option>
    <option value="citagong">Chitagong</option>
</select>
    <span>GPA:</span><input type="text" value="gpa">

</fieldset><br>
</from>
</div>
<div class="vill">
Quota:<br>
<form action="action_page.php">
<input type="checkbox" name="Freedom Fighter" >Freedom Fighter.
<input type="checkbox" name="Tribal" >Tribal.
<input type="checkbox" name="Teacher" >Spouse.
</from><br><br></div>

<div class="vill">
<form action="action_page.php">
<fieldset>
    <legend>Contact number</legend>
    <span>Mobile</span><br><input type="text" value="number"><br>
    <span>e-mail</span><br><input type="text" value="mail"><br>
    

</fieldset><br>
</from>
</div>

 <button type="button" onclick="alert('Your form succesfuly filled. A confarmation message will send to your number. ')" >Submit</button><br>
<p><a href="http://mbstu.ac.bd" target="iframe_a">More about Mawlana Bhashani Science & Technology University</a></p>
</body>
</head>
</html>