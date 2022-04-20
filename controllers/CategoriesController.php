<?php 

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {
    $catId = isset($_GET['categories_id']) ? $_GET['categories_id'] : null ;
    $subcatId = isset($_GET['subcategories_id']) ? $_GET['subcategories_id'] : null ;
    $page = 'categories';

    if($catId === null & $subcatId === null) {
        exit();
    }
    if($catId !== null & $subcatId === null) {
        $rsCategory = getCategories($catId);
        $rsCategories = getAllCategories();
        $rsSubcategoties = getCategoriesId($catId);
        loadCategories($page, $rsCategories, $rsSubcategoties, $rsCategory);
    }
    if($catId !== null & $subcatId !== null) {
        $rsSubCategory = getSubCategories($catId, $subcatId);
        $rsCategories = getAllCategories();
        $rsCategoties = getSubcategoriesId($catId, $subcatId);
        loadCategories($page, $rsCategories, $rsCategoties, $rsSubCategory);
    }

    
}