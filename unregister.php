<?php

require_once "functions.php";
if (array_key_exists("id",$_SESSION))
{
    Query("DELETE FROM USERS WHERE ID = ?",array($_SESSION['id']));
}
session_destroy();
redirect("index.php");
die;
