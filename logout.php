<?php

include "functions.php";

//session_destroy();
unset($_SESSION['login']);
unset($_SESSION['user']);
yonlendir("index.php");