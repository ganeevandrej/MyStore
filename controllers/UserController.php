<?php 

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');
include('./models/usersModel.php');

function extendce() {
    if(!$_SESSION['user']) {
        header('Location: http://myshop/');
    }

    return getAllCategories();
}

function indexAction() {
    $page = 'order';
    $rsCategories = extendce();
    loadUserPage($rsCategories, $page);
}

function adressAction() {
    $page = 'adress';
    $rsCategories = extendce();
    loadUserPage($rsCategories, $page);
}

function discondsAction() {
    $page = 'disconds';
    $rsCategories = extendce();
    loadUserPage($rsCategories, $page);
}

function contactsAction() {
    $page = 'contacts';
    $rsCategories = extendce();
    $userdata = getDataUserId($_SESSION['user']['id']);
    loadContactPage($userdata, $rsCategories, $page);
}

