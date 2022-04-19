<?php 

function getAllsubCategories($id) {
    global $pdo;
    $sql = "SELECT * FROM subcategories WHERE categories_id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
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

function getCategoriesId($catId, $subcatId) {
    $catId=intval($catId);
    $subcatId=intval($subcatId);
    global $pdo;
    $sql = "SELECT * FROM subcategories WHERE categories_id='$catId' AND id='$subcatId' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    echo '<pre>';
    print_r($query->fetch());
    echo '</pre>';
}