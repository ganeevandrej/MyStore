<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {
    $product_id = isset($_GET['id']) ? $_GET['id'] : null;
    if($product_id === null) {
        exit();
    }
    $page = 'product';
    $rsCategories = getAllCategories();
    $product = getProductById($product_id);

    loadProduct($page, $product, $rsCategories);
}