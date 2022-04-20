<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function addToCartAction() {
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;

    if(!$itemId) return false;

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