<?php
$DegreeError = "";

	$Degree= "";

	if(isset($_REQUEST['submit'])){
		if($_POST['Degree'] == null){
			$DegreeError = "Invalid Degree";
		}else{
			$Degree = $_REQUEST['Degree'];
		}
	}
    ?>
<html>
<head>
	<title>Degree</title>
</head>
<body>
<table>
<tr>
			<td>Degree</td>
            <td> <input type="checkbox" name="" value="">SSC 
                <input type="checkbox" name="" value="">HSC
                <input type="checkbox" name="" value="">BSc.
                <input type="checkbox" name="" value="">MSc.</td>
                <td> <br></td>
			</tr>
			<td><input type="submit" name="submit" value="Submit"></td>

</table>
	</form>
</body>
</html>			
			