<?php

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');

function indexAction() {

    $rsProductsPopular = getAllProductsPopular();
    $rsCategories = getAllCategories();
    $rsProductsWomen = getAllProductsWomen();
    $rsProductsMen = getAllProductsMen();
    $page = 'home';

    loadTemplate($page, $rsCategories, $rsProductsWomen, $rsProductsMen, $rsProductsPopular);
}