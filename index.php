<?php

require_once "functions.php";
require_once "output.php";
echo '<div style="margin: 20px;">';
echo 'PHP Tests<hr>';

if (!array_key_exists("id",$_SESSION))
{
    echo '<button href="login.php" class="button is-primary autobutton">Login</button> ';
    echo '<button href="register.php" class="button is-success autobutton">Register</button> ';
}
else
{
    $row = First("USERS","ID",$_SESSION['id']);
    printf('Logged in as: %s<br><br><br>',$row['USERNAME']);
    echo '<button href="logout.php" class="button is-warning autobutton">Logout</button> ';
    echo '<button href="unregister.php" class="button is-danger autobutton">Unregister</button> ';

}
echo '</div>';