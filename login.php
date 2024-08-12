<?php

require_once "functions.php";
require_once "output.php";
echo '<div style="margin: 20px;">';
echo 'Login<hr>';


if (array_key_exists("username",$_POST))
{
    sleep(1);
    $existing = First("USERS","USERNAME",$_POST['username']);
    if ($existing)
    {
        $pwdok = password_verify($_POST['password'],$existing['PASSWORD']);
        if ($pwdok)
        {
            $_SESSION['id'] = $existing['ID'];
            redirect("index.php");
            die;
        }    
    }
    die("Invalid username/password!");
}

?>

<form method="POST" action="login.php">
    <label for="username">Username (email):</label>
    <input type="email" name="username" class="input" required><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" class="input" required><br><br>
    <button type="submit" class="button is-success">Login</button>
</form>
<button class="autobutton button is-danger" href="index.php">Back</button>
