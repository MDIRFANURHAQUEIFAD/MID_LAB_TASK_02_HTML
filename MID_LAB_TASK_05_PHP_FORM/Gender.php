<?php
$GenderError = "";

	$DOB= "";

	if(isset($_REQUEST['submit'])){
		if($_POST['Gender'] == null){
			$GenderError = "Invalid Gender";
		}else{
			$Gender = $_REQUEST['Gender'];
		}
	}
    ?>
<tr>
			<td>Gender: </td>
					<td>
						<input type="radio" name="gender" value=""> Male
						<input type="radio" name="gender" value=""> Female
						<input type="radio" name="gender" value=""> Other
					</td>
			</tr>
			<br>
			<td><input type="submit" name="submit" value="Submit"></td>

	</table>
	</form>
</body>
</html>
						

			