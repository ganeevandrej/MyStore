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