<?php
	$PUBLICHOMEError = "";
	$PUBLICHOME = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['PUBLICHOME'] == null){
			$PUBLICHOMEError = "Invalid PUBLICHOME";
		}else{
			$PUBLICHOME = $_REQUEST['PUBLICHOME'];
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

</tr>





</td>
<td><b><h2></h2></b><br>
Welocome to X company
</td>
<td>
<b> </b> <br><br>
<a href="https://Home">Home 
<a href="https://Login">Login
<a href="https://Registration">Registration
</td>
</tr>



<tr height="80px">
<td colspan="3" align="center">copyright 2017</td>
</tr>
</table>

</body>



</html>








