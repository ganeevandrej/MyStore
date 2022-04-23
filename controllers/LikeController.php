<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {
    $itemId = isset($_SESSION['like']) ? $_SESSION['like'] : array();

    $rsProductsFromLike = getProductsFromCart($itemId);
    $rsCategories = getAllCategories();
    $page = 'like';

    loadLikePage($page, $rsProductsFromLike, $rsCategories);
}

function addToLikeAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;

    if(!$itemId) exit();

    $arrData = [];

    if((isset($_SESSION['like'])) && (in_array($itemId, $_SESSION['like']) === false)) {
        $_SESSION['like'][] = $itemId;
        $arrData['countItem'] = count($_SESSION['like']);
        $arrData['success'] = 1;
    }
    else{
        $arrData['success'] = 0;
    }
    
    echo json_encode($arrData);
}

function removeFromLikeAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;

    if(!$itemId) exit();

    $arrData = [];
    $key = array_search($itemId, $_SESSION['like']);
    if((isset($_SESSION['like'])) && ($key !== false)) {
        unset($_SESSION['like'][$key]);
        $arrData['countItem'] = count($_SESSION['like']);
        $arrData['success'] = 1;
    }
    else{
        $arrData['success'] = 0;
    }
    
    echo json_encode($arrData);
}