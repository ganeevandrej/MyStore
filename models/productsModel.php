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
    $sql = "SELECT * FROM products Where categories_id=2 AND subcategories_id>5 LIMIT 8";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getAllProductsPopular() {
    global $pdo;
    $sql = "SELECT * FROM products Where subcategories_id = 1 OR subcategories_id = 5";
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

function getProductsBySubategoriesSortDescPrice($sub_id, $id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE subcategories_id=$sub_id AND categories_id=$id ORDER BY price DESC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsBySubategoriesSortAscPrice($sub_id, $id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE subcategories_id=$sub_id AND categories_id=$id ORDER BY price ASC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsBySubategoriesSortDescId($sub_id, $id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE subcategories_id=$sub_id AND categories_id=$id ORDER BY id DESC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsBySubategoriesSortName($sub_id, $id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE subcategories_id=$sub_id AND categories_id=$id ORDER BY name ASC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsBySubategoriesSortAscId($sub_id, $id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE subcategories_id=$sub_id AND categories_id=$id ORDER BY id ASC";
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

function getProductsDescId($id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id=$id  ORDER BY id DESC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsAscId($id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id=$id  ORDER BY id ASC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsAscPrice($id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id=$id  ORDER BY price ASC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsDescPrice($id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id=$id  ORDER BY price DESC";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getProductsName($id) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id=$id  ORDER BY name ASC";
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

function getProductsFromOrder($string) {
    global $pdo;
    $sql = "SELECT * FROM products WHERE id in ($string)";
    $query = $pdo->prepare($sql);
    $query->execute(); 

    return $query->fetchAll();
}

function getProductPhoto($product_id) {
    global $pdo;
    $sql = "SELECT * FROM photoProducts WHERE product_id = $product_id";
    $query = $pdo->prepare($sql);
    $query->execute(); 

    return $query->fetch();
}