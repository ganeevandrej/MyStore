<?php

include('./models/cotegoriesModel.php');
include('./models/usersModel.php');

function indexAction() {
    $page = 'login';
    $inputValidation['message'] = null;
    $rsCategories = getAllCategories();
    loadAuthPage($page, $rsCategories, $inputValidation['message']);
}

function loginAction() {
    $email = $_POST['email'];
    $pwd1 = $_POST['pwd1'];

    $inputValidation = checkLogintParams($email, $pwd1);
    $result = loginUser($email);

    if(!$inputValidation && !password_verify($pwd1 ,$result['password'])) {
        $inputValidation['success'] = false;
        $inputValidation['message'] = "Неверный email или пароль";
    }

    if(!$inputValidation) {
        $_SESSION['user'] = $result;
        header('Location: http://myshop/');
    }
    else{
        $page = 'login';
        $rsCategories = getAllCategories();
        loadAuthPage($page, $rsCategories, $inputValidation['message']);
    }
}