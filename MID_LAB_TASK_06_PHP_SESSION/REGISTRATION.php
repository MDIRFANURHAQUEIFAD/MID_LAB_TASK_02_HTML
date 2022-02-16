<?php
  $REGISTRATION = "";
  $REGISTRATION  = "";

  if(isset($_REGISTRATION ['submit'])){
    if($_POST['REGISTRATION '] == null){
      $REGISTRATIONError = "Invalid REGISTRATION ";
    }else{
      $REGISTRATION  = $_REQUEST['REGISTRATION '];
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

<tr>
  <td>

  <form action="/action_page.php">
   <label for="email"> Name</label> <br>
    <input type="email" id="email" name="email"> <br>

</tr>
</td>

<tr>
  <td>


  <form action="/action_page.php">
   <label for="email"> Email</label> <br>
    <input type="email" id="email" name="email"> <br>

</tr>
</td>

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

  <form action="/action_page.php">
   <label for="Confirm Password"> Confirm Password</label> <br>
    <input type="Confirm Password" id="Confirm Password" name="Confirm Password"> <br>
</tr>
</td>

<tr>
  <td>

  <form action="/action_page.php">
<p>Gender:</p>
  <input type="radio" id="Male" name="fav_language" value="Male">
  <label for="Male">Male</label>
  <input type="radio" id="Female" name="fav_language" value="Female">
  <label for="Female">Female</label>
  <input type="radio" id="Other" name="fav_language" value="Other">
  <label for="Other">Other</label> <br>
  
</tr>
</td>


<br>


<tr>
  <td>

<form action="/action_page.php">  
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
  
</tr>
</td>


<br>

<tr>
  <td>
<input type="submit"> 

<tr height="80px">
<td colspan="3" align="center">copyright 2017</td>
</tr>
</table>

</body>



</html>

   </form>


</body>




