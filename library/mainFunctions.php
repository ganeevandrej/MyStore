<?php 

function loadPage($controllerName, $actionName = 'index') {

    include(PathPrefix . $controllerName . PathPostfix);
    $functionName = $actionName . 'Action';
    $functionName();
}

function loadTemplate($page, $rsCategories, $rsProductsWomen, $rsProductsMen) {

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadCategories($page, $rsCategories, $rsCategoties, $rsCategory) {

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadProduct($page, $product, $rsCategories) {

    include(TemplatePrefix . $page . TemplatePostfix);
}