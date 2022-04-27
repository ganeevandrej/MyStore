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
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $phone = $_POST['phone'];
    $pwd1 = trim($_POST['pwd1']);
    $pwd2 = trim($_POST['pwd2']);
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $patronymic = trim($_POST['patronymic']);

    $inputValidation = checkRegisrtParams($login, $email, $pwd1, $pwd2, $name, $surname, $patronymic, $phone);

    if(!$inputValidation && checkUserEmail($email)) {
        $inputValidation['success'] = false;
        $inputValidation['message'] = "Пользователь с таким $email уже зарегистрирован!";
    }

    if(!$inputValidation) {
        $pwd1 = password_hash($_POST['pwd1'], PASSWORD_DEFAULT);
        $userData = registerNewUser($login, $email, $pwd1, $name, $surname, $patronymic, $phone);
        $_SESSION['user'] = $userData;
        header('Location: http://myshop/');
    }
    else{
        $inputValidation['success'] = false;
        $page = 'auth';
        $rsCategories = getAllCategories();
        loadAuthPage($page, $rsCategories, $inputValidation['message']);
    }
}