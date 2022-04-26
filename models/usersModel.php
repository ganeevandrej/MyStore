<?php

function registerNewUser($login, $email, $phone, $pwd1) {
    global $pdo;
    $sql = "INSERT INTO users (`login`, `email`, `phone`, `password`) 
            VALUES ('$login', '$email', '$phone', '$pwd1')";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function loginUser($email) {
    global $pdo;
    $sql = "SELECT * FROM users Where email = $email";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function checkRegisrtParams($login, $email, $pwd1, $pwd2) {

    $rs = null;

    if(strlen($login) === 0 || strlen($email) === 0 || strlen($pwd1) === 0 || strlen($pwd2) === 0) {
        $rs['message'] = 'Заполните ообязательные поля!';
        $rs['success'] = false;
    }
    if($pwd1 !== $pwd2) {
        $rs['message'] = 'Пароли не совпадают!';
        $rs['success'] = false;
    }

    return $rs;
}

function checkLogintParams($email, $pwd1) {

    $rs = null;

    if(strlen($email) === 0 || strlen($pwd1) === 0) {
        $rs['message'] = 'Заполните ообязательные поля!';
        $rs['success'] = false;
    }

    return $rs;
}

function checkUserEmail($email) {
    global $pdo;
    $sql = "SELECT * FROM users Where email='$email'";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getDataUserId($id) {
    global $pdo;
    $sql = "SELECT * FROM users Where id = '$id'";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}