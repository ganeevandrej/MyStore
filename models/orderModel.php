<?php

function maveNewOrder($name, $phone, $adress, $price) {
    $userId = $_SESSION['user']['id'];
    $email = $_SESSION['user']['email'];
    $comment = "Id пользователя = $userId</br>
                ФИО: $name</br>
                Email: $email</br>
                Телефон: $phone</br>
                Самовызов: $adress";
    $dateCreated = date('Y.m.d H:i:s');
    $userIp = $_SERVER['REMOTE_ADDR'];

    global $pdo;
    $sql = "INSERT INTO orders (`user_id`, `date_created`, `date_payment`, `status`, `comment`, `user_ip`, `price`) 
            VALUES ('$userId', '$dateCreated', '$dateCreated', '0', '$comment', '$userIp', '$price')";
    $query = $pdo->prepare($sql);
    $query->execute(); 
    
    $sqlId = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
    $query = $pdo->prepare($sqlId);
    $query->execute(); 

    return $query->fetch();
}

function setPurchaseForOrder($orderId, $produtData) {
    global $pdo;
    $sql = "INSERT INTO purchase (`order_id`, `product_id`, `price`, `amount`) VALUES ";

    $arr = [];
    foreach($produtData as $key=>$value) {
        $arr[] = "('$orderId', '" . $value['id'] . "', '" . $value['price'] . "', '" . $value['count'] . "')";
    }

    $sql .= implode(", ", $arr);
    $query = $pdo->prepare($sql);
    return $query->execute(); 
}

function getOrderByUserId($userId) {
    global $pdo;
    $sql = "SELECT * FROM orders WHERE user_id ='$userId'";
    $query = $pdo->prepare($sql);
    $query->execute(); 

    return $query->fetchAll();
}