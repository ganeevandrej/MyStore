<?php

function loadPage($controllerName, $actionName = 'index')
{

    include(PathPrefix . $controllerName . PathPostfix);
    $functionName = $actionName . 'Action';
    $functionName();
}

function loadTemplate($page, $rsCategories, $rsProductsWomen, $rsProductsMen, $rsProductsPopular)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];
    
    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadCategories($page, $rsCategories, $rsCategoties, $rsCategory)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadProduct($page, $product, $rsCategories, $productPhoto)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadCartPage($page, $rsProductsFromCart, $rsCategories)
{
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

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
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadAuthPage($page, $rsCategories, $inputValidation) {
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadUserOrders($rsCategories, $page, $ordersUser) {
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadUserPage($rsCategories, $page) {
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadContactsPage($page, $rsCategories, $message, $messageok = null) {
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];

    include(TemplatePrefix . $page . TemplatePostfix);
}

function loadOrder($rsCategories, $page, $rsProducts) {
    $countCart = count($_SESSION['cart']);
    $countLike = count($_SESSION['like']);
    $user = $_SESSION['user'];
    include(TemplatePrefix . $page . TemplatePostfix);
}