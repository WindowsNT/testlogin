<?php

require_once "functions.php";
session_destroy();
redirect("index.php");
die;
