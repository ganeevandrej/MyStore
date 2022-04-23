<?php

function loadPage($controllerName, $actionName = 'index')
{

    include(PathPrefix . $controllerName . PathPostfix);
    $functionName = $actionName . 'Action';
    $functionName();
}

function loadTemplate($page, $rsCategories, $rsProductsWomen, $rsProductsMen)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadCategories($page, $rsCategories, $rsCategoties, $rsCategory)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadProduct($page, $product, $rsCategories)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadCartPage($page, $rsProductsFromCart, $rsCategories)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $sum = 0;
    if ($countCart) {
        foreach ($rsProductsFromCart as $key => $value) {
            $sum +=  $value['price'];
        }
    }

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadLikePage($page, $rsProductsFromLike, $rsCategories) {
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);

    include(TemplatePrefix . $page . TemplatePostfix);
}
