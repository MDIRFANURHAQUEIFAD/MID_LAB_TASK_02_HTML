<?php
$BloodGroupError = "";

	$BloodGroup= "";

	if(isset($_REQUEST['submit'])){
		if($_POST['Blood Group'] == null){
			$BloodGroupError = "Invalid Blood Group";
		}else{
			$BloodGroup = $_REQUEST['Blood Group'];
		}
	}
    ?>
<tr>
			<td>Blood Group</td>
<td> <select name="">
    <option value="">A+</option>
    <option value="">A-</option>
    <option value="">B+</option>
    <option value="">B-</option>
    <option value="">AB+</option>
    <option value="">AB-</option>
    <option value="">0+</option>
    <option value="">O-</option>
</select> </td>
<td></td>
			</tr>
			<br>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>


			<tr>
				<td></td>

			</tr>
		</table>
	</form>
</body>
