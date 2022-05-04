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
        $rsProductCart = getSubcategoriesId($catId, $subcatId);
        loadCategories($page, $rsCategories, $rsProductCart, $rsSubCategory);
    }
}

function sortingNameAction() {
    $select = $_POST['select'];
    $cat = $_POST['categories'];
    $subCat = $_POST['subcategories'] ? $_POST['subcategories']: null;

    if($cat && $subCat && $select == 'descending_price') {
        $rsCategories = getAllCategories();
        $rsSubCategory = getSubCategories($cat, $subCat);
        $rsCat = getSubcatDescPriceId($cat, $subCat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsSubCategory);
    }

    if($cat && $subCat && $select == 'price') {
        $rsCategories = getAllCategories();
        $rsSubCategory = getSubCategories($cat, $subCat);
        $rsCat = getSubcatAscPriceId($cat, $subCat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsSubCategory);
    }

    if($cat && $subCat && $select == 'age') {
        $rsCategories = getAllCategories();
        $rsSubCategory = getSubCategories($cat, $subCat);
        $rsCat = getSubcatAscId($cat, $subCat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsSubCategory);
    }

    if($cat && $subCat && $select == 'name') {
        $rsCategories = getAllCategories();
        $rsSubCategory = getSubCategories($cat, $subCat);
        $rsCat = getSubcatName($cat, $subCat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsSubCategory);
    }

    if($cat && $subCat && $select == 'descending_age') {
        $rsCategories = getAllCategories();
        $rsSubCategory = getSubCategories($cat, $subCat);
        $rsCat = getSubcatDescId($cat, $subCat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsSubCategory);
    }

    if($cat && !$subCat && $select == 'descending_age') {
        $rsCategories = getAllCategories();
        $rsCategory = getCategories($cat);
        $rsCat = getCategoriesDescId($cat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsCategory);
    }

    if($cat && !$subCat && $select == 'age') {
        $rsCategories = getAllCategories();
        $rsCategory = getCategories($cat);
        $rsCat = getCategoriesAscId($cat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsCategory);
    }

    if($cat && !$subCat && $select == 'price') {
        $rsCategories = getAllCategories();
        $rsCategory = getCategories($cat);
        $rsCat = getCategoriesAscPrice($cat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsCategory);
    }

    if($cat && !$subCat && $select == 'descending_price') {
        $rsCategories = getAllCategories();
        $rsCategory = getCategories($cat);
        $rsCat = getCategoriesDescPrice($cat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsCategory);
    }

    if($cat && !$subCat && $select == 'name') {
        $rsCategories = getAllCategories();
        $rsCategory = getCategories($cat);
        $rsCat = getCategoriesName($cat);
        $page = 'categories';
        loadCategories($page, $rsCategories, $rsCat, $rsCategory);
    }
}