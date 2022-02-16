<?php
	$FORGOTPASSWORDError = "";
	$FORGOTPASSWORD = "";

	if(isset($_FORGOTPASSWORD['submit'])){
		if($_POST['FORGOTPASSWORD'] == null){
			$FORGOTPASSWORDError = "Invalid FORGOTPASSWORD";
		}else{
			$FORGOTPASSWORD = $_REQUEST['FORGOTPASSWORD'];
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
><h1>X Company</h1> </th>

</tr>


</td>
<td><b><h2></h2></b><br>
FORGOT PASSWORD
</td>
<td>
<b> </b> <br><br>
<a href="https://Home">Home 
<a href="https://Login">Login
<a href="https://Registration">Registration
</td>
</tr>

<tr>
	<td>
<form action="/action_page.php">
   <label for="Enter Email">Enter Email</label> <br>
    <input type="Enter Email" id="Enter Email" name="Enter Email"> <br>
</td>
</tr>

<tr>
	<td>
    <input type="submit"> 

</tr>
</td>
<tr height="80px">
<td colspan="3" align="center">copyright 2017</td>
</tr>
</table>

</body>



</html>
