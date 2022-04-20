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