<?php 

function indexAction() {
    unset($_SESSION['cart']);
    unset($_SESSION['user']);
    unset($_SESSION['like']);
    header('Location: http://myshop/');
}