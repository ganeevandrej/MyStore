<?php

function registerNewUser($login, $email, $pwd1, $name, $surname, $patronymic, $phone) {
    global $pdo;
    $sql = "INSERT INTO users (`login`, `email`, `phone`, `password`, `name`, `surname`, `patronymic`) 
            VALUES ('$login', '$email', '$phone', '$pwd1', '$name', '$surname', '$patronymic')";
    $query = $pdo->prepare($sql);

    if($query->execute()) { 
        $sql = "SELECT *FROM users WHERE `email` = '$email' ";
        $query = $pdo->prepare($sql);
        $query->execute();

        return $query->fetch();
        
    }
}

function uppdateUser($login, $email, $phone, $pwd2) {
    global $pdo;
    $sql = "UPDATE users SET `login`='$login', `phone`='$phone', `password`='$pwd2' WHERE `email`='$email'";
    $query = $pdo->prepare($sql);

    if($query->execute()) {
        $sql = "SELECT *FROM users WHERE `email`='$email'";
        $query = $pdo->prepare($sql);
        $query->execute();

        return $query->fetch();
    }
}

function loginUser($email) {
    global $pdo;
    $sql = "SELECT * FROM users Where `email` = '$email'";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

function checkRegisrtParams($login, $email, $pwd1, $pwd2, $name, $surname, $patronymic, $phone) {

    $rs = null;

    if(strlen($login) === 0 || strlen($email) === 0 || strlen($pwd1) === 0 || strlen($pwd2) === 0 ||
        strlen($name) === 0 || strlen($surname) === 0 || strlen($patronymic) === 0 || strlen($phone) === 0) {
        $rs['message'] = 'Заполните ообязательные поля!';
        $rs['success'] = false;
    }
    if($pwd1 !== $pwd2) {
        $rs['message'] = 'Пароли не совпадают!';
        $rs['success'] = false;
    }

    return $rs;
}

function checkUppDateParams($login, $phone, $email, $pwd1, $pwd2, $pwd3, $check) {

    $rs = null;

    if($check) {
        if(strlen($pwd1) === 0 || strlen($pwd2) === 0 || strlen($pwd3) === 0) {
            $rs['message'] = 'Заполните ообязательные поля!';
            $rs['success'] = false;
        }
        if(!password_verify($pwd1, $_SESSION['user']['password'])) {
            $rs['message'] = 'Неверный пароль!';
            $rs['success'] = false;
        }
        if($pwd2 !== $pwd3) {
            $rs['message'] = 'Пароли не совпадают!';
            $rs['success'] = false;
        }
    }
    
    if(strlen($login) === 0 || strlen($phone) === 0) {
        $rs['message'] = 'Заполните ообязательные поля!';
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
    $sql = "SELECT * FROM users Where `email`='$email'";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getDataUserId($id) {
    global $pdo;
    $sql = "SELECT * FROM users Where id = '$id'";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}