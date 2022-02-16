<?php
	$LOGINError = "";
	$LOGIN = "";

	if(isset($_LOGIN['submit'])){
		if($_POST['LOGIN'] == null){
			$LOGINError = "Invalid LOGIN";
		}else{
			$LOGIN = $_REQUEST['LOGIN'];
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



<td><b><h2></h2></b><br>
LogIN
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
   <label for="User Name"> User Name</label> <br>
    <input type="User Name" id="User Name" name="User Name"> <br>
</tr>
</td>

<tr>
	<td>

<form action="/action_page.php">
   <label for="Password"> Password</label> <br>
    <input type="Password" id="Password" name="Password"> <br>
</tr>
</td>

<tr>
	<td>

    <p>Remember Me:</p>
    <input type="submit">

</tr>
</td>

<tr height="80px">
<td colspan="3" align="center">copyright</td>
</tr>
</table>

</body>



</html>
