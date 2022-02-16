<?php
	$VIEWPROFILEError = "";
	$VIEWPROFILE = "";

	if(isset($_VIEWPROFILE['submit'])){
		if($_POST['VIEWPROFILE'] == null){
			$VIEWPROFILEError = "Invalid VIEWPROFILE";
		}else{
			$VIEWPROFILE = $_REQUEST['VIEWPROFILE'];
		}
	}
	
?>
<html>
<head>

</head>
<body>
<table border="1" width="100%" >
<tr height="80px">
<th colspan="3"
><h1>X company</h1> </th>
<td>
	<tr>
Logged in as<a href="https://Bob">Bob
<a href="https://Log Out">Log Out
</td>
</tr>
</tr>





</td>
<td><b><h2></h2></b><br>
Welocome Bob
</td>
<td>
<b> </b> <br><br>
<a href="https://Dashboard">Dashboard <br>
<a href="https://View Profile">View Profile <br>
<a href="https://Edit Profile">Edit Profile <br>
<a href="https://Change Profile Picture">Change Profile Picture	<br>
<a href="https://Change Password">Change Password <br>
<a href="https://Log Out">Log Out <br>	
</td>
</tr>

</td>
<td><b><h2></h2></b><br>
PROFILE
</td>
<tr>


<td><form action="/action_page.php"></form> </td>
<td>  <label for="email"> Name</label> <br> </td>
<td>    <input type="email" id="email" name="email"> <br> </td>

 <td> <form action="/action_page.php"> </td>
  <td> <label for="email"> Email</label> <br> </td>
  <td>  <input type="email" id="email" name="email"> <br> </td>
<tr>
	<td>
<p>Gender:</p>
  <input type="radio" id="Male" name="fav_language" value="Male">
  <label for="Male">Male</label>
  <input type="radio" id="Female" name="fav_language" value="Female">
  <label for="Female">Female</label>
  <input type="radio" id="Other" name="fav_language" value="Other">
  <label for="Other">Other</label> <br>
 </td>
 </tr>

 <tr>
 <td>

<p>Date of Birth:</p>
  <input type="radio" id="dd" name="fav_language" value="dd">
  <label for="dd">dd</label>
  <input type="dd" id="dd" name="dd"> <br>
  <input type="radio" id="mm" name="fav_language" value="mm">
  <label for="mm">mm</label>
  <input type="mm" id="mm" name="mm"> <br>
  <input type="radio" id="yy" name="fav_language" value="yy">
  <label for="yy">yy</label> <br>
  <input type="yy" id="yy" name="yy"> <br>

</td>
</tr>


  
<img align ="right" src="Image Not Found " height="100" width="100">
<a href="https://Edit Profile">Edit Profile


<tr height="80px">
<td colspan="3" align="center">copyright 2017</td>
</tr>
</table>

</body>



</html>