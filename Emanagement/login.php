<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<html lang="en-gb" dir="ltr" vocab="http://schema.org/" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="login-box">
  <h1>Sign in</h1>
  <form action="php/validation.php" method="post">
  <table bgcolor="#333333" width="300">
  <td>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Email or National_ID" name="names" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required>
  </div>
  
 
  <input type="submit" class="btn" name="submit" value="Sign in ">
</div>
               <a href="index.php"> <center> <font style="font-family:'Comic Sans MS'; color:#009CE8">Register here</font></center></a>
</td>
</table>
</form>
</body>
</html>
