<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $rsCategory['name'] ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/categories.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="products-title">
                <h1><?=$rsCategory['name'] ?></h1>
            </div>
            <div class="products-filters"></div>
            <div class="propducts-items">
                <?php foreach ($rsCategoties as $key => $value) : ?>
                    <div class="item-product">
                        <div class="categories-product-img">
                            <a href='/product/<?= $value['id'] ?>/' class='product'>
                                <img class='product-photo' 
                                src='../../accets/templats/defualt/img/<?= $value['image'] ?>'></img>
                            </a>
                            <div onclick="toggleLike(<?=$value['id']?>, <?=$_SESSION['user']?>)" class="categories-product-before-like">
                                <span id="like_<?= $value['id'] ?>" 
                                class="<?php if ($itemInCArt) echo "hiden" ?> categories-like"></span>
                                <span id="active_like_<?= $value['id'] ?>" 
                                class="<?php if (!$itemInCArt) echo "hiden" ?> categories-active-like"></span>
                            </div>
                        </div>
                        <div class="categories-product-info">
                            <a href='/product/$id/' class='categories-info-name'><?= $value['name'] ?></a>
                            <div class="categories-info-cart-price">
                                <span class='categories-info-price'><?= $value['price'] ?> ₽</span>
                                <div class="categories-actioncart">
                                    <span class="<?php if ($isCart !== false) echo 'hiden' ?>
                                    categories-info-addcart" id="infoAddCart_<?= $value['id'] ?>" 
                                    onclick="addToCartFromHome(<?=$value['id']?>, <?=$_SESSION['user']?>)"></span>
                                    <span class="<?php if ($isCart === false) echo 'hiden' ?> 
                                    categories-info-removecart" id="infoRemoveCart_<?= $value['id'] ?>" 
                                    onclick="removeFromCartHome(<?=$value['id']?>, <?=$_SESSION['user']?>)"></span>
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