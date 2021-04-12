<?php
$name=$_POST["name"];
$pass=$_POST["pass"];


?>



<html>
<head>
<title>Signup Page</title>

</head>

<body>
<form method="post">
<label>Username</label>
<input type="text" name="name" value="" placeholder="enter your name"> <br>
<label>Password</label>
<input type="password" name="pass" value="" placeholder="enter your password"> <br>
<input type="submit" value="signup" > <br>
If you are a registered user <a href="login.php">Login</a>


</form>



</body>
</html>

<?php

$file=fopen("test.txt","a");
fwrite($file,$name);
fwrite($file,$pass);
fclose($file);


?>


