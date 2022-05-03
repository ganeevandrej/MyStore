<?php
session_start();

if ( (!isset($_SESSION["cart"])) || (!isset($_SESSION["like"])) ) {
    $_SESSION["like"] = [];
    $_SESSION["cart"] = [];
}

// $_SESSION["user"] = [];
// $_SESSION["cart"] = [];
// $_SESSION["like"] = [];



include('./config/config.php');
include('./config/db.php');
include('./library/mainFunctions.php');

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index' ;
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'Index' ;


loadPage($controllerName, $actionName);


