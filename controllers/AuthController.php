<?php

include('./models/cotegoriesModel.php');
include('./models/usersModel.php');

function indexAction() {
    $page = 'auth';
    $inputValidation['message'] = null;
    $rsCategories = getAllCategories();
    loadAuthPage($page, $rsCategories, $inputValidation['message']);
}

function registAction() {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];

    $inputValidation = checkRegisrtParams($login, $email, $pwd1, $pwd2);

    if(!$inputValidation && checkUserEmail($email)) {
        $inputValidation['success'] = false;
        $inputValidation['message'] = "Пользователь с таким $email уже зарегистрирован!";
    }

    if(!$inputValidation) {
        $pwd1 = password_hash($_POST['pwd1'], PASSWORD_DEFAULT);
        $userData = registerNewUser($login, $email, $phone, $pwd1);
        $_SESSION['user'] = $userData;
        header('Location: http://myshop/');
    }
    else{
        $inputValidation['success'] = false;
        $inputValidation['message'] = "Ошибка регистрации!";
        $page = 'auth';
        $rsCategories = getAllCategories();
        loadAuthPage($page, $rsCategories, $inputValidation['message']);
    }
}