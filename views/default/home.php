<?php $pageTitle = 'Главная страница' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/home.css">


    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="main-home">
                <div class="banners-block">
                    <div class="banner-item">
                        <a class="banner" href="?controller=categories&categories_id=1">
                            <img src="/accets/templats/defualt/photo/images/banner-1.jpg">
                        </a>
                    </div>
                    <div class="banner-item">
                        <a class="banner" href="?controller=categories&categories_id=2">
                            <img src="accets/templats/defualt/photo/images/banner-2.jpg">
                        </a>
                    </div>
                </div>
                <div class="popular-block">
                    <div class="title">
                        <span>Популярное</span>
                    </div>
                    <div class="slaider-Popular">
                        <button class="btn-prev-Popular">
                            <span class="pre"></span>
                        </button>
                        <div class="slaider-container-Popular">
                            <div class="slaider-track-Popular">
                                <?php foreach ($rsProductsPopular as $key => $value) : ?>
                                    <?php $isCart = in_array($value['id'], $_SESSION['cart']) ?>
                                    <?php $itemInCArt = in_array($value['id'], $_SESSION['like']) ?>
                                    <div class='slaider-item-Popular'>
                                        <div class="product-img">
                                            <a href='/product/<?= $value['id'] ?>/' class='product'>
                                                <img src="../../accets/templats/defualt/img/<?= $value['image'] ?>" class="photo"></img>
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
                        <button class="btn-next-Popular">
                            <span class="next"></span>
                        </button>
                    </div>
                </div>
                <div class="women-block">
                    <div class="title">
                        <span>Женщины</span>
                    </div>
                    <div class="slaider-Wumen">
                        <button class="btn-prev-Wumen">
                            <span class="pre"></span>
                        </button>
                        <div class="slaider-container-Wumen">
                            <div class="slaider-track-Wumen">
                                <?php foreach ($rsProductsWomen as $key => $value) : ?>
                                    <?php $itemInCArt = in_array($value['id'], $_SESSION['like']) ?>
                                    <div class='slaider-item-Wumen'>
                                        <div class="product-img">
                                            <a href='/product/<?= $value['id'] ?>/' class='product'>
                                                <img class='photo' src='../../accets/templats/defualt/img/<?= $value['image'] ?>'></img>
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
                        <button class="btn-next-Wumen">
                            <span class="next"></span>
                        </button>
                    </div>
                </div>
                <div class="men-block">
                    <div class="title">
                        <span>Мужчины</span>
                    </div>
                    <div class="slaider-Men">
                        <button class="btn-prev-Men">
                            <span class="pre"></span>
                        </button>
                        <div class="slaider-container-Men">
                            <div class="slaider-track-Men">
                                <?php foreach ($rsProductsMen as $key => $value) : ?>
                                    <?php $itemInCArt = in_array($value['id'], $_SESSION['like']) ?>
                                    <div class='slaider-item-Men'>
                                        <div class="product-img">
                                            <a href='/product/<?= $value['id'] ?>/' class='product'>
                                                <img class='photo' src='../../accets/templats/defualt/img/<?= $value['image'] ?>'></img>
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
                        <button class="btn-next-Men">
                            <span class="next"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
    </body>

</html>