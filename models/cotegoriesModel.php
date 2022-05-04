<?php 

function getAllsubCategories($id) {
    global $pdo;
    $sql = "SELECT * FROM subcategories WHERE categories_id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
}

function getSubCategories($id, $sub_id) {
    global $pdo;
    $sql = "SELECT * FROM subcategories WHERE categories_id='$id' AND id='$sub_id' ";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function getCategories($id) {
    global $pdo;
    $sql = "SELECT * FROM categories WHERE id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function getAllCategories() {
    global $pdo;
    $arr = [];
    $sql = "SELECT * FROM categories";
    $query = $pdo->prepare($sql);
    $query->execute();
    $data = $query->fetchAll();

    foreach($data as $key=>$value) {
        $value['subcategories'] = getAllsubCategories($value['id']);
        $arr[] = $value;
    }

    return $arr;
}

function getSubcategoriesId($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id='$catId' AND subcategories_id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();
    

    return getProductsBySubategories($subcatId, $catId);
}

function getCategoriesId($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsByCategories($catId);
}

function getCategoriesDescId($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsDescId($catId);
}

function getCategoriesAscId($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsAscId($catId);
}

function getCategoriesAscPrice($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsAscPrice($catId);
}

function getCategoriesDescPrice($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsDescPrice($catId);
}

function getCategoriesName($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsName($catId);
}

function getCookie($subCat_id) {
    global $pdo;
    $sql = "SELECT * FROM subcategories WHERE id = $subCat_id";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function getSubcatDescPriceId($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id='$catId' AND subcategories_id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsBySubategoriesSortDescPrice($subcatId, $catId);
}

function getSubcatAscPriceId($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id='$catId' AND subcategories_id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsBySubategoriesSortAscPrice($subcatId, $catId);
}

function getSubcatDescId($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id='$catId' AND subcategories_id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsBySubategoriesSortDescId($subcatId, $catId);
}

function getSubcatName($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id='$catId' AND subcategories_id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsBySubategoriesSortName($subcatId, $catId);
}

function getSubcatAscId($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE categories_id='$catId' AND subcategories_id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsBySubategoriesSortAscId($subcatId, $catId);
}

function getCatsId($catId) {
    $catId=intval($catId);
    global $pdo;
    $sql = "SELECT * FROM products WHERE id='$catId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $query->fetch();

    return getProductsByCategories($catId);
}