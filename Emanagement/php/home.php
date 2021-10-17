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
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Home</title>
    <link rel="stylesheet" href="../styles/style1.css">
</head>
<body>
<div class="welcome-text"><h3 align="right" style="color:#00FF00"><?php echo ($_SESSION['manager']); ?></h3>
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMPLOYEES MANAGEMENT SYSTEM</h2>
		<form action="search.php" method="post">
		<p align="right"><input type="text" style="border-bottom-style:groove; height:25px; width:100; font-style:inherit; font-family:Georgia, 'Times New Roman', Times, serif" name="search" placeholder="Search here"><input type="submit"  style="background-color:#A8A8FF; color:#000000; font-family:Georgia, 'Times New Roman', Times, serif; font-variant:small-caps; height:35px"name="submit" value="Search">
</p>
</form>
</div>
<ul class="nav-area">
<li><a href="addemployee.php">Add Employee</a></li>
<li><a href="Edetails.php">Employees' Details</a></li>
<li><a href="logout.php" style="background-color:red">Logout</a></li>
</ul>
</div>



</body>
</html>

