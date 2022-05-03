<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');
include('./models/orderModel.php');


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

function loadingOrderAction()  {
    $arr = [];
    $_SESSION['cartCount'] = $_POST;
    foreach($_POST as $key=>$value) {
        $arr[] = $key;
    }
    $string = implode(", ", $arr);
    $rsProducts = getProductsFromOrder($string);
    $rsCategories = getAllCategories();    
    $page = 'order';
    loadOrder($rsCategories, $page, $rsProducts);
}

function saveOrderAction() {
    print_r($_POST);
    $price = $_POST['price'];
    $name = $_POST['userData'];
    $phone = $_POST['userPhone'];
    $adress = $_POST['adressDelivery'];
    $_SESSION['saleCart'] = getProductsFromCart($_SESSION['cart']);

    foreach($_SESSION['saleCart'] as $keys=>&$value) {
        foreach($_SESSION['cartCount'] as $key=>$val) {
            if($value['id'] == $key) {
                $value['count'] = $val;
            }
        }
    }

    $orderId = maveNewOrder($name, $phone, $adress, $price);
    if(!$orderId) {
        $_SESSION['order']['no'] = 'Произошла ошибка';
        $_SESSION['order']['ok'] = "";
    }
    $rs = setPurchaseForOrder($orderId['id'], $_SESSION['saleCart']);
    print_r($rs);
    if(!$rs) {
        $_SESSION['order'] = 'Произошла ошибка';
        $_SESSION['order']['ok'] = "";
    }
    $_SESSION['cart'] = [];
    $_SESSION['saleCart'] = [];
    $_SESSION['cartCount'] = [];
    $_SESSION['order']['no'] = "";
    $_SESSION['order']['ok'] = "Заказ успешно оформлен";
    header('Location: http://myshop/');
}