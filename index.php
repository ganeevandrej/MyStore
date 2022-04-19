<?php

include('./config/config.php');
include('./config/db.php');
include('./library/mainFunctions.php');

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index' ;
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'Index' ;

loadPage($controllerName, $actionName);


