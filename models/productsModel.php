<?php

function getAllProductsWomen() {
    global $pdo;
    $sql = "SELECT * FROM products Where categories_id=1 AND subcategories_id>1 LIMIT 8";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getAllProductsMen() {
    global $pdo;
    $sql = "SELECT * FROM products Where categories_id=2 AND subcategories_id>1 LIMIT 8";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsBySubategories($sub_id, $id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE subcategories_id=$sub_id AND categories_id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsByCategories($id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductById($product_id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$product_id' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    
    return $query->fetch();
}

function getProductsFromCart($itemId) {
    global $pdo;
    
    if ($itemId) {
        $stringItemId = implode(", ", $itemId);
       $sql = "SELECT * FROM products WHERE id in ($stringItemId)";
        $query = $pdo->prepare($sql);
        $query->execute(); 

        return $query->fetchAll();
    }
    else {
        return null;
    }
}