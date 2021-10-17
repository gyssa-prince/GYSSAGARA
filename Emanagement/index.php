<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<html lang="en-gb" dir="ltr" vocab="http://schema.org/" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Registration</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="login-box">
 <center> <h1>Sign up</h1></center>
  <form action="php/registration.php" method="post">
  <table bgcolor="#333333" width="350">
  <td>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Names" name="names" required>
  </div>

  <div class="textbox">
     <i class="fas fa-user"></i>
    <input type="number" placeholder="National ID" name="nid" required>
  </div>
  
    <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="phone" placeholder="Phone Number" name="phone" required>
  </div>
  
      <div class="textbox">
     <i class="fas fa-user"></i>
    <input type="email" placeholder="Email" name="email" required>
  </div>

    <div class="textbox">
	<label>Birth date</label>
    <input type="date" name="bdate" required>
  
        <div class="textbox">
    <i class="fas fa-lock"></i>
<input type="password" placeholder="Enter your password" name="password" required>
  </div>
  </div>
  
  <input type="submit" class="btn" name="submit" value="Sign up ">
</div>
               <a href="login.php"> <center> <font style="font-family:'Comic Sans MS'; color:#009CE8">Login here</font></center></a>
</td>
</table>
</form>
</body>
</html>
