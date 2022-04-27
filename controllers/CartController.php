<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction () {
    $itemId = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    $rsProductsFromCart = getProductsFromCart($itemId);
    $rsCategories = getAllCategories();
    $page = 'cart';

    loadCartPage($page, $rsProductsFromCart, $rsCategories);
}

function addToCartAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;

    if(!$itemId) exit();

    $arrData = [];

    if((isset($_SESSION['cart'])) && (in_array($itemId, $_SESSION['cart']) === false)) {
        $_SESSION['cart'][] = $itemId;
        $arrData['countItem'] = count($_SESSION['cart']);
        $arrData['success'] = 1;
    }
    else{
        $arrData['success'] = 0;
    }
    
    echo json_encode($arrData);
}

function removeFromCartAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;

    if(!$itemId) exit();

    $arrData = [];
    $key = array_search($itemId, $_SESSION['cart']);
    if((isset($_SESSION['cart'])) && ($key !== false)) {
        unset($_SESSION['cart'][$key]);
        $arrData['countItem'] = count($_SESSION['cart']);
        $arrData['success'] = 1;
    }
    else{
        $arrData['success'] = 0;
    }
    
    echo json_encode($arrData);
}

function orderAction()  {
    print_r($_POST);
}