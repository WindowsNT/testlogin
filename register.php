<?php

require_once "functions.php";
require_once "output.php";
echo '<div style="margin: 20px;">';
echo 'Register<hr>';


if (array_key_exists("username",$_POST))
{
    Query("CREATE TABLE IF NOT EXISTS USERS (ID INTEGER PRIMARY KEY,USERNAME TEXT,PASSWORD TEXT,GUID TEXT)");
    if ($_POST['password1'] != $_POST['password2'])
        die("Password mismatch!");

    $existing = First("USERS","USERNAME",$_POST['username']);
    if ($existing)
        die("Registration error!");

    $pwd = password_hash($_POST['password1'],PASSWORD_DEFAULT);
    Query("INSERT INTO USERS (USERNAME,PASSWORD,GUID) VALUES (?,?,?)",array(
        $_POST['username'],$pwd,guidv4(),
    ));
    echo 'Registration successful. <a href="login.php">Login now</a>';
    die;
}

?>

<form method="POST" action="register.php">
    <label for="username">Username (email):</label>
    <input type="email" name="username" class="input" required><br><br>
    <label for="password1">Password:</label>
    <input type="password" name="password1" class="input" required><br><br>
    <label for="password2">Password (again):</label>
    <input type="password" name="password2" class="input" required><br><br>
    <button type="submit" class="button is-success">Register</button>
</form>
<button class="autobutton button is-danger" href="index.php">Back</button>
