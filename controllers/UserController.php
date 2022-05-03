<?php 

include('./models/cotegoriesModel.php');
include('./models/productsModel.php');
include('./models/usersModel.php');
include('./models/orderModel.php');

function extendce() {
    if(!$_SESSION['user']) {
        header('Location: http://myshop/');
    }

    return getAllCategories();
}

function indexAction() {
    $page = 'orders';
    $rsCategories = extendce();
    $ordersUser = getOrderByUserId($_SESSION['user']['id']);

    loadUserOrders($rsCategories, $page, $ordersUser);
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
    $inputValidation['message'] = null;
    $inputValidation['messageok'] = null;
    loadContactsPage($page, $rsCategories, $inputValidation['message'], $inputValidation['messageok']);
}

function uppdateAction() {
    $login = $_POST['userLogin'];
    $check = $_POST['userCheck'];
    $email = $_SESSION['user']['email'];
    $phone = $_POST['userPhone'];
    $pwd1 = $_POST['userOldPas'];
    $pwd2 = $_POST['userNewPas'];
    $pwd3 = $_POST['userNewPas1'];
    $result = null;

    $inputValidation = checkUppDateParams($login, $phone, $email, $pwd1, $pwd2, $pwd3, $check);
    if(!$inputValidation) {
        $pwd2 = password_hash($pwd2, PASSWORD_DEFAULT);
        $result = uppdateUser($login, $email, $phone, $pwd2);
    }
    else {
        $inputValidation['success'] = false;
    }

    if(!$inputValidation && $result) {
        $_SESSION['user'] = $result;
        $inputValidation['messageok'] = "Данные успешно сохранены!";
        $page = 'contacts';
        $rsCategories = getAllCategories();
        loadContactsPage($page, $rsCategories, $inputValidation['message'], $inputValidation['messageok']);
    }
    else{
        $inputValidation['success'] = false;
        $inputValidation['messageok'] = null;
        $page = 'contacts';
        $rsCategories = getAllCategories();
        loadContactsPage($page, $rsCategories, $inputValidation['message']);
    }
}

