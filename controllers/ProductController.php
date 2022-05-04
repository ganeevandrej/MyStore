<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {
    $product_id = isset($_GET['id']) ? $_GET['id'] : null;
    if($product_id === null) {
        exit();
    }
    $page = 'product';
    $productPhoto = getProductPhoto($product_id);
    $rsCategories = getAllCategories();
    $product = getProductById($product_id);
    $cookie = getCookie($product['subcategories_id']);

    loadProduct($page, $product, $rsCategories, $productPhoto, $cookie);
}