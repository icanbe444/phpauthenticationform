<html>
<head>
<title>Login Page</title>

</head>

<body>
<form method="post">
<label>Username</label>
<input type="text" name="name" value="" placeholder="enter your name"> <br>
<label>Password</label>
<input type="password" name="pass" value="" placeholder="enter your password"> <br>
<input type="submit" value="submit" > <br>
if you are a new user <a href="signup.php">signup</a>

</form>



</body>
</html>


<?php
$name=$_POST["name"];
$pass=$_POST["pass"];
$userlist = file("test.txt");

$success = false;
foreach($userlist as $user) {
    $user_details = explode('|', $user);
    if ($user_details[0] ==$name && $user_details == $pass) {

        $success = true;
        break;
    }


}
if (success) {
    echo "Hello $name , you have been logged in.";
    header("location: index.php");
    die;

}else{
    echo "you have entered a wrong username or password";
}
?>