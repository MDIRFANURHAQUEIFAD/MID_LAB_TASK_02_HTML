<?php
$DateOfBirthError = "";

	$DateOfBirth= "";

	if(isset($_REQUEST['submit'])){
		if($_POST['DateOfBirthError'] == null){
			$DateOfBirthErrorError = "Invalid DateOfBirthError";
		}else{
			$DateOfBirthError = $_REQUEST['DateOfBirthError'];
		}
	}
    ?>

<html>
<head>
	<title>DateOfBirth</title>
</head>
<body>
<table>    
			<tr>
			<td>DateOfBirth: </td>
					<td><input type="date" name="" value=""></td>
			</tr>
			<td><input type="submit" name="submit" value="Submit"></td>



    
		</table>
	</form>
</body>
</html>

			