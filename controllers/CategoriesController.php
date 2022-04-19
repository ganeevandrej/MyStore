<?php 

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {
    $catId = isset($_GET['categories_id']) ? $_GET['categories_id'] : null ;
    $subcatId = isset($_GET['subcategories_id']) ? $_GET['subcategories_id'] : null ;
    if($catId === null || $subcatId === null) {
        exit();
    }
    $rsCategoties = getCategoriesId($catId, $subcatId);
}