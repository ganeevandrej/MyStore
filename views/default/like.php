<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Избранное</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/like.css">
    <link rel="stylesheet" href="../../accets/templats/defualt/css/footer.css">

    <?php include('./views/default/header.php') ?>
    <main class="like-block">
        <div class="wrapper">
            <div class="like-inner">
                <h1 class="like-title">Избранное</h1>
                <div>
                <?php if (count($rsProductsFromLike) > 0) : ?>
                <?php foreach ($rsProductsFromLike as $key => $value) : ?>
                            <div id="itemLike_<?= $value['id'] ?>" 
                            class="<?php if ( count($countLike) === 0) echo 'hiden'?> like-item">
                                <div class="like-item-image">
                                    <a href="/product/<?= $value['id'] ?>/">
                                        <img src="/accets/templats/defualt/img/<?= $value['image'] ?>">
                                    </a>
                                </div>
                                <div class="like-item-info">
                                    <div class="info-row">
                                        <a class="like-item-name" href="/product/<?= $value['id'] ?>/">
                                            <?= $value['name'] ?><br/>
                                            <span>размер</span>
                                        </a>
                                        <button class="close-item" id="removelike_<?= $value['id'] ?>" 
                                        <?php if (!$itemInlike) {echo "class='hiden' ";} ?> 
                                        onclick="removeFromlikePage(<?=$value['id']?>)">
                                            <img src="/accets/templats/defualt/photo/ikon/close.png">
                                        </button>
                                    </div>
                                    <div class="info-row margin-like">
                                    </div>
                                    <div class="info-row">
                                        <span class="total-price"><?= $value['price'] ?>.00 ₽</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <span class="<?php if (count($rsProductsFromLike) > 0) echo 'hiden'?> like-null" 
                id="likeNull">Вам еще ничего не понравилось</span>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>


    </body>

</html>