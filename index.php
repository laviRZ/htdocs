<!DOCTYPE HTML>
<?php
    session_start();
?>
<html>

<head>
  <title>login</title>
</head>
<form name="register" action="register.php" method="post">
    <input name="username" placeholder="Your full name here:"><br>
    <input name="email" placeholder="Your email address here:"><br>
    <input name="password" type="password" placeholder="********"><br>
    <input name="regBtn" type="submit" value="Register">
</form>
<form name="login" action="login.php" method="post">
    <input name="username" placeholder="Your username here:"><br>
    <input name="password" type="password" placeholder="Your password here:"><br>
    <input name="loginBtn" type="submit" value="Log In">
</form>

<body>

</body>

</html>