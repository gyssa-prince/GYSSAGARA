<?php

session_start();
if(!isset($_SESSION['manager'])){
header('location:../login.php');
}
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<html lang="en-gb" dir="ltr" vocab="http://schema.org/" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>ADD EMPLOYEE</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<div class="login-box">
<h2 style="color:#FF0000">!!!Invalid Age</h2>
 <center> <h1>Add employee</h1></center>
  <form action="employee.php" method="post">
  <table bgcolor="#333333" width="350">
  <td>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Names" name="names" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="number" placeholder="National ID" name="nid" minlength=16 maxlength="16" required>
  </div>
  
    <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="phone" placeholder="Phone Number (+250 only)" name="phone" required maxlength="13" >
  </div>
  
      <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="email" placeholder="Email" name="email" required>
  </div>

    <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="date" name="bdate" required>
  
        <div class="textbox">
    <i class="fas fa-lock"></i>
<label>Status</label>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label>Position</label><br>
    <select name="status" required> 
	<option value="ACTIVE">ACTIVE</option>
	<option value="INACTIVE">INACTIVE</option>
	</select>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="position" required> 
	<option value="MANAGER">MANAGER</option>
	<option value="DEVELOPER">DEVELOPER</option>
	<option value="DESIGNER">DESIGNER</option>
	<option value="TESTER">TESTER</option>
	<option value="DEVOPS">DEVOPS</option>
    
	</select>
  </div>
  </div>
  
  <input type="submit" class="btn" name="submit" value="Add Employee">
</div>
</td>
</table>
</form>
</body>
</html>
