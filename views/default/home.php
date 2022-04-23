<?php $pageTitle = 'Главная страница' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/footer.css">


    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div>баннеры</div>
            <div>популярное</div>
            <div>
                <div>
                    <span>Женщины</span>
                    <span>Новинки</span>
                </div>
                <div class="products-women">
                    <?php foreach ($rsProductsWomen as $key => $value) : ?>
                        <?php $itemInCArt = in_array($value['id'], $_SESSION['like'])?>
                        <div class='item-product'>
                            <div class="product-img">
                                <a href='/product/<?=$value['id']?>/' class='product'>
                                    <img class='photo' src='../../accets/templats/defualt/img/<?= $value['image'] ?>'></img>
                                </a>
                                <div onclick="toggleLike(<?=$value['id']?>)" 
                                    class="product-before-like-w">
                                    <span id="like_<?=$value['id']?>" 
                                    class="<?php if($itemInCArt) echo "hiden"?> like"></span>
                                    <span  id="active_like_<?=$value['id']?>" 
                                    class="<?php if(!$itemInCArt) echo "hiden"?> active-like"></span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href='/product/$id/' class='info-name'><?= $value['name'] ?></a>
                                <span class='info-price'><?= $value['price'] ?> ₽</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <div>
                    <span>Мужчины</span>
                    <span>Новинки</span>
                </div>
                <div class="products-men">
                    <?php foreach ($rsProductsMen as $key => $value) : ?>
                        <?php $itemInCArt = in_array($value['id'], $_SESSION['like'])?>
                        <div class='item-product'>
                            <div class="product-img">
                                <a href='/product/<?= $value['id'] ?>/' class='product'>
                                    <img class='photo' src='../../accets/templats/defualt/img/<?= $value['image'] ?>'></img>
                                </a>
                                <div onclick="toggleLike(<?=$value['id']?>)" 
                                class="product-before-like-m">
                                    <span id="like_<?=$value['id']?>" 
                                    class="<?php if($itemInCArt) echo "hiden"?> like"></span>
                                    <span  id="active_like_<?=$value['id']?>" 
                                    class="<?php if(!$itemInCArt) echo "hiden"?> active-like"></span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href='/product/$id/' class='info-name'><?= $value['name'] ?></a>
                                <span class='info-price'><?= $value['price'] ?> ₽</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
    </body>

</html>