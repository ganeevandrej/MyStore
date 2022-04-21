<?php 

function loadPage($controllerName, $actionName = 'index') {

    include(PathPrefix . $controllerName . PathPostfix);
    $functionName = $actionName . 'Action';
    $functionName();
}

function loadTemplate($page, $rsCategories, $rsProductsWomen, $rsProductsMen) {
    $countCart = count($_SESSION['cart']);
    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadCategories($page, $rsCategories, $rsCategoties, $rsCategory) {
    $countCart = count($_SESSION['cart']);
    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadProduct($page, $product, $rsCategories) {
    $countCart = count($_SESSION['cart']);
    include(TemplatePrefix . $page . TemplatePostfix);
}