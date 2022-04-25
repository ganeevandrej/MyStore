<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $rsCategory['name'] ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/footer.css">
    <link rel="stylesheet" href="../../accets/templats/defualt/css/home.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="products-title">
                <h1><?= $rsCategory['name'] ?></h1>
            </div>
            <div class="products-filters"></div>
            <div class="propducts-items">
                <?php foreach ($rsCategoties as $key => $value) : ?>
                    <div class="item-product">
                        <div class="product-img">
                            <a href='/product/<?= $value['id'] ?>/' class='product'>
                                <img class='product-photo' src='../../accets/templats/defualt/img/<?= $value['image'] ?>'></img>
                            </a>
                            <div onclick="toggleLike(<?= $value['id'] ?>)" class="product-before-like">
                                <span id="like_<?= $value['id'] ?>" class="<?php if ($itemInCArt) echo "hiden" ?> like"></span>
                                <span id="active_like_<?= $value['id'] ?>" class="<?php if (!$itemInCArt) echo "hiden" ?> active-like"></span>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href='/product/$id/' class='info-name'><?= $value['name'] ?></a>
                            <div class="info-cart-price">
                                <span class='info-price'><?= $value['price'] ?> ₽</span>
                                <div class="actioncart">
                                    <span class="<?php if ($isCart !== false) echo 'hiden' ?>
                                                     info-addcart" id="infoAddCart_<?= $value['id'] ?>" onclick="addToCartFromHome(<?= $value['id'] ?>)"></span>
                                    <span class="<?php if ($isCart === false) echo 'hiden' ?> 
                                                    info-removecart" id="infoRemoveCart_<?= $value['id'] ?>" onclick="removeFromCartHome(<?= $value['id'] ?>)"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
    </body>

</html>