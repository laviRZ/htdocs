<!DOCTYPE HTML>
<?php
    session_start();
?>
<html>

<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <script src="mainscript.js"></script>
</head>
<!-- login form-->
<form name="login" id="loginform" action="login.php" method="post">
    <input name="lusername" placeholder="Your username here:"><br>
    <input name="lpassword" type="password" placeholder="Your password here:"><br>
    <input class="formBtn" name="loginBtn" type="button" value="Log In" onclick="login()">
    <button type="button" id="dntHaveAcntBtn" onclick="replace()">Not registered yet?</button>
</form>
<!-- register form -->    
<form name="register" id="registerform" action="register.php" method="post">
    <input name="rusername" placeholder="Your full name here:"><br>
    <input name="remail" placeholder="Your email address here:"><br>
    <input name="rpassword" type="password" placeholder="********"><br>
    <input class="formBtn" name="regBtn" type="button" value="Register" onclick="login()">
    <button type="button" id="haveAcntBtn" onclick="replace()">Already have an account?</button>
</form>

<body>

</body>
<script>
    initialize();
    
</script>
</html>