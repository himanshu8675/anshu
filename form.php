<?php
include "conn.php";
?>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>trainer</title>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="css/form.css" />

</head>

<body>
<?php
//////// sign up trainer   ////
//error_reporting(0);
$su=$_REQUEST['sub'];
echo $su;
if(isset($_REQUEST['submit']))
{	
if($_REQUEST['pswd']!=$_REQUEST['pswd1'])
{
echo "pasword is not match";}
else {
echo $i="insert into regtrn (fnm, lnm, gender, personal_training, cross_fit, fat_reducing, resistance_band, muscles_tone_up, yoga, aerobics, physiotheraphy, pilates, nutrition, biomechanics, gyrotonic, nordic_walking, dietition, country, state, address, picture, month1, year1, month2, year2, certfct1, certfct2, certfct, eml, pswd, cpswd )
values ('".$_REQUEST['fnm']."', '".$_REQUEST['lnm']."', '".$_REQUEST['gender']."'
, '".$_REQUEST['personel_training']."', '".$_REQUEST['cross_fit']."'
, '".$_REQUEST['fat_reducing']."', '".$_REQUEST['resistance_band']."'
, '".$_REQUEST['muscles_tone_up']."', '".$_REQUEST['yoga']."'
, '".$_REQUEST['aerobics']."', '".$_REQUEST['physiotheraphy']."'
, '".$_REQUEST['pilates']."', '".$_REQUEST['nutrition']."', '".$_REQUEST['biomechanics']."'
, '".$_REQUEST['gyrotonic']."', '".$_REQUEST['nordic_walking']."', '".$_REQUEST['dietition']."'
, '".$_REQUEST['su']."'

 '".$_REQUEST['state']."', '".$_REQUEST['address']."'
, '".$_REQUEST['picture']."', '".$_REQUEST['month1']."', '".$_REQUEST['year1']."'
, '".$_REQUEST['month2']."', '".$_REQUEST['year2']."', '".$_REQUEST['certfct1']."' 
, '".$_REQUEST['certfct2']."', '".$_REQUEST['certfct']."','".$_REQUEST['eml']."', '".$_REQUEST['pswd']."', '".$_REQUEST['pswd1']."')";
	$in=mysqli_query($con, $i);
	echo $_REQUEST['sub'];
	//header('location:form.php');
}
	}

/////// end of sign up 	 ///////
?>
<div class="form">
<form method="post">

<div class="form-group"><br>
<label class="lb11">Sign Up With Us..! </label><br><br>
<hr>
   <?php 
   echo $_REQUEST['sub'];
		$s="select * from countries";
	$sh=mysqli_query($con, $s);
	
	echo  "<form action' method='POST' class='form1'><select name='sub' onchange='this.form.submit();' class='select-op1'>";
		if(isset($_REQUEST['sub']))
{	echo  "<option>".$_REQUEST['sub']."</option>";
	while($shw=mysqli_fetch_array($sh))
	{
	echo "<option value='".$shw['country']."'>".$shw['country']."</option>";
		
		}
	}else {
	echo	"<option>Country</option>";
	while($shw=mysqli_fetch_array($sh))
	{
	echo "<option value='".$shw['country']."'>".$shw['country']."</option>";
	}
	}
			echo "</select></form>";



	echo "<form method='POST' class='form2'>";
$i="select * from state ";
$in=mysqli_query($con, $i);
		echo "<select class='select-op2' name='state'>";
		echo "<option>State</option>";

while($ind=mysqli_fetch_array($in))
{
	if(isset($_REQUEST['sub']))
	{
	//	echo $_REQUEST['sub'];
		if($_REQUEST['sub']=="India")
			{
		echo "<option>".$ind['India']."</option>";
			}
	else {
		$u="select * from uk";
		$uk=mysqli_query($con, $u);
	while($uks=mysqli_fetch_array($uk))
					{
				echo "<option value='".$uks['state']."'>".$uks['state']."</option>";
		}
					}
	}
}
echo "</select>";

?>
<label class="lb1">First Name:</label>
  <input type="text" name="fnm" class="txt1"  pattern="^[a-zA-Z][a-zA-Z_\.]{3,15}$" required><br><br>
  <label class="lb1">Last Name:</label>
  <input type="text" name="lnm" class="txt2" pattern="^[a-zA-Z][a-zA-Z_\.]{3,15}$" required><br><br>
  <label class="lb1">Gender:</label>
  <input type="radio" name="gender" value="male" class="rdo"> Male  <input type="radio" name="gender" value="female" class="rdo1"> Female<br><br>
 
  <label class="lb1">Skills:</label> <br><br>
 <div class="op1"> 
  <input type="checkbox" name="personel_training" value="Personel_Training"><label class=""> Personel Training </label><br>
  <input type="checkbox" name="cross_fit" value="Cross_Fit"><label class="Cross_Fit"> Cross Fit </label><br>
  <input type="checkbox" name="fat_reducing" value="Fat_reducing"><label class="Fat_Reducing"> Fat Reducing </label><br>
  <input type="checkbox" name="resistance_band" value="Resistance_band"><label class="Resistance_band"> Resistance band</label> <br>
  <input type="checkbox" name="muscles_tone_up" value="Muscles_tone_up"><label class="muscles_tone_up"> muscles tone up</label> <br></div>
  <div class="op2">
  <input type="checkbox" name="yoga" value="Yoga"><label class="Yoga"> Yoga</label><br> 
  <input type="checkbox" name="aerobics" value="Aerobics"><label class=""> Aerobics</label><br>
  <input type="checkbox" name="physiotheraphy" value="Physiotheraphy"><label class=""> Physiotheraphy</label><br>
  <input type="checkbox" name="pilates" value="Pilates"><label class=""> Pilates</label><br>
  <input type="checkbox" name="nutrition" value="Nutrition"><label class=""> Nutrition</label> <br></div>
  <div class="op3">
  <input type="checkbox" name="biomechanics" value="Biomechanics"><label class=""> Biomechanics</label> <br>
  <input type="checkbox" name="gyrotonic" value="Gyrotonic"><label class=""> Gyrotonic</label> <br>
  <input type="checkbox" name="nordic_walking" value="Nordic walking"><label class=""> Nordic walking</label> <br>
  <input type="checkbox" name="dietition" value="Dietition"><label class=""> Dietition</label> <br><br><br><br></div>
  
  
  
  <label class="lb1">Location: </label>	
 
<label class="lb1">Address:</label>
<input type="text" name="address" class="txt1a" pattern="^[a-zA-Z][a-zA-Z_\.]{3,50}$" required><br><br>

<label class="lb1">Experience:</label>
<select name="month1">
<option>Month</option>
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>

</select>
<select name="year1">
<option>Year</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2015">2014</option>
<option value="2016">2016</option>

</select>-To-
<select name="month2">
<option>Month</option>
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>

<select name="year2">
<option>Year</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option> 
</select><br>
<br>

<label class="lb1">Cerficate 1:</label>
<input type="text" name="certfct1" class="txt1c1" required><br><br>
<label class="lb1">Cerficate 2:</label>
<input type="text" name="certfct2" class="txt1c2" required><br><br>
<label class="lb1">Cerficate 3:</label>
<input type="text" name="certfct" class="txt1c3" required><br><br>




<label>
<label class="lb1">Email_id</label>
<input type="email" name="eml" class="txt1e" required><br><br>

<label class="lb1">Password</label>
<input type="password" name="pswd" class="txt1p"  required="required"><br><br>
  
 <label class="lb1">Retype</label>
<input type="password" name="pswd1" class="txt1r"  required="required"><br><br>
   
<input type="submit" name="submit" value="SUBMIT" class="btn">
</form>

</div>

</body>

</center>
</html>