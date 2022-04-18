<?php 

function loadPage($controllerName, $actionName = 'index') {

    include(PathPrefix . $controllerName . PathPostfix);
    $functionName = $actionName . 'Action';
    $functionName();
}

function loadTemplate($page) {

    include(TemplatePrefix . $page . TemplatePostfix);
}