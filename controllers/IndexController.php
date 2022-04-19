<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {

    $rsCategories = getAllCategories();
    $rsProductsWomen = getAllProductsWomen();
    $rsProductsMen = getAllProductsMen();
    $page = 'index';

    loadTemplate($page, $rsCategories, $rsProductsWomen, $rsProductsMen);
}