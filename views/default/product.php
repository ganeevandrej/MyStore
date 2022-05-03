<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name'] ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/product.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="product-panel">Печеньки</div>
            <div class="product-inner">
                <div class="product-block">
                    <div class="slaider-Photo">
                        <button class="btn-prev-Photo">
                            <span class="pre"></span>
                        </button>
                        <div class="slaider-container-Photo">
                            <div class="slaider-track-Photo">
                                <div class="slaider-item-Photo">
                                    <img src="/accets/templats/defualt/img/<?= $productPhoto['photo-1'] ?>">
                                </div>
                                <div class="slaider-item-Photo">
                                    <img src="/accets/templats/defualt/img/<?= $productPhoto['photo-2'] ?>">
                                </div>
                                <div class="slaider-item-Photo">
                                    <img src="/accets/templats/defualt/img/<?= $productPhoto['photo-3'] ?>">
                                </div>
                                <div class="slaider-item-Photo">
                                    <img src="/accets/templats/defualt/img/<?= $productPhoto['photo-4'] ?>">
                                </div>
                            </div>
                        </div>
                        <button class="btn-next-Photo">
                            <span class="next"></span>
                        </button>
                    </div>
                </div>
                <div class="product-descrip">
                    <div class="descrip">
                        <h2 class="product-name"><?= $product['name'] ?></h2>
                        <span class="product-price"><?= $product['price'] ?> ₽</span>
                        <div class="reiting">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span class="text">(0)</span>
                        </div>
                        <div class="size">
                            <span class="title-size">Размер</span>
                            <div class="btn-size">
                                <button id="btn-S" onclick="reColor('btn-S')">S</button>
                                <button id="btn-M" onclick="reColor('btn-M')">M</button>
                                <button id="btn-L" onclick="reColor('btn-L')">L</button>
                                <button id="btn-XL" onclick="reColor('btn-XL')">XL</button>
                            </div>
                        </div>
                        <div class="cart-to-like">
                            <div>
                                <?php $itemInCArt = in_array($product['id'], $_SESSION['cart']) ?>
                                <?php $itemInLike = in_array($product['id'], $_SESSION['like']) ?>
                                <button class="btn-cart <?php if ($itemInCArt) echo "hiden"; ?>" onclick="addToCart(<?= $product['id'] ?>,<?= $_SESSION['user'] ?>)" id="addCart_<?= $product['id'] ?>">Добавить В корзину</button>
                                <button class="btn-cart <?php if (!$itemInCArt) echo "hiden"; ?>" onclick="removeFromCart(<?= $product['id'] ?>, <?= $_SESSION['user'] ?>)" id="removeCart_<?= $product['id'] ?>">Удалить из карзины</button>
                            </div>
                            <div class="block-btn-like">
                                <button class="btn-like" onclick="togleLikeFromProsuct(<?= $product['id'] ?> ,<?= $_SESSION['user'] ?>)">
                                    <span id="productLikeOk_<?= $product['id'] ?>" class="btn-like-ok <?php if ($itemInLike) echo "hiden"; ?>"></span>
                                    <span id="productLikeNo_<?= $product['id'] ?>" class="btn-like-no <?php if (!$itemInLike) echo "hiden"; ?>"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-description">
                <div class="description-header">
                    <div class="description" onclick="description()">
                        <span class="ikon"></span>
                        <span class="title-description">Описание</span>
                    </div>
                    <div class="setting" onclick="setting()">
                        <span class="ikon"></span>
                        <span class="title-description">Характеристики</span>
                    </div>
                    <div class="reviews" onclick="reviews()">
                        <span class="ikon"></span>
                        <span class="title-description">Отзывы</span>
                    </div>
                </div>
                <div class="block-footer description-text"><?= $product['description'] ?></div>
                <div class="hiden block-footer setting-product">
                    <div>
                        <span>Состав:</span>
                        <span><?= $product['compound'] ?></span>
                    </div>
                    <div>
                        <span>Страна:</span>
                        <span><?= $product['country'] ?></span>
                    </div>
                </div>
                <div class="hiden block-footer reviews-product">
                    <span>Отзывов еще никто не оставлял</span>
                    <button>Написать отзыв</button>
                </div>
            </div>
            <div class="slaider-Similar">
                <button class="btn-prev-Similar">
                    <span class="pre"></span>
                </button>
                <div class="slaider-container-Similar">
                    <div class="slaider-track-Similar">
                        
                    </div>
                </div>
                <button class="btn-next-Similar">
                    <span class="next"></span>
                </button>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>

    </body>

</html>