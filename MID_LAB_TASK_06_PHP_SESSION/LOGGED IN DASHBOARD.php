<?php
	$LOGGEDINDASHBOARDError = "";
	$LOGGEDINDASHBOARD = "";

	if(isset($_LOGGEDINDASHBOARD['submit'])){
		if($_POST['LOGGEDINDASHBOARD'] == null){
			$LOGGEDINDASHBOARDError = "Invalid LOGGEDINDASHBOARD";
		}else{
			$LOGGEDINDASHBOARD = $_REQUEST['LOGGEDINDASHBOARD'];
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
<h1>X company</h1> </th>
Logged in as<a href="https://Bob">Bob
<a href="https://Log Out">Log Out

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

<tr height="80px">
<td colspan="3" align="center">copyright 2017</td>
</tr>
</table>

</body>



</html>






