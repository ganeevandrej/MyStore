<?php $inpitCount = 1; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/cart.css">
    <link rel="stylesheet" href="../../accets/templats/defualt/css/footer.css">

    <?php include('./views/default/header.php') ?>
    <main class="cart">
        <div class="wrapper">
            <div class="cart-inner">
                <h1 class="cart-title">Корзина</h1>
                <div id="cartBlock" class="cart-block" <?php if (count($rsProductsFromCart) === 0) echo "class='hiden'; " ?>>
                    <div class="cart-items">
                        <?php if (count($rsProductsFromCart) > 0) : ?>
                            <?php foreach ($rsProductsFromCart as $key => $value) : ?>
                                <div id="itemCart_<?= $value['id'] ?>" class="cart-item">
                                    <div class="cart-item-image">
                                        <a href="/product/<?= $value['id'] ?>/">
                                            <img src="/accets/templats/defualt/img/<?= $value['image'] ?>">
                                        </a>
                                    </div>
                                    <div class="cart-item-info">
                                        <div class="info-row">
                                            <a class="cart-item-name" href="/product/<?= $value['id'] ?>/">
                                                <?= $value['name'] ?>
                                                <span>размер</span>
                                            </a>
                                            <button class="close-item" id="removeCart_<?= $value['id'] ?>" <?php if (!$itemInCArt) {
                                                                                                                echo "class='hiden' ";
                                                                                                            } ?> onclick="removeFromCartPage(<?= $value['id'] ?>)">
                                                <img src="/accets/templats/defualt/photo/ikon/close.png">
                                            </button>
                                        </div>
                                        <div class="info-row margin-cart">
                                            <span id="cartPrice_<?= $value['id'] ?>" class="cart-item-price" value="<?= $value['price'] ?>"><?= $value['price'] ?>.00 ₽</span>
                                        </div>
                                        <div class="info-row">
                                            <div class="count">
                                                <button <?php if ($inpitCount === 1) echo "disabled='true' " ?> class="decrement" id="decrement_<?= $value['id'] ?>" onclick="decrement(<?= $value['id'] ?>)">-</button>
                                                <input name="inputCount_<?= $value['id'] ?>" type="text" id="inputCount_<?= $value['id'] ?>" disabled="true" class="inputCount" value="<?= $inpitCount ?>">
                                                <button class="increment" onclick="increment(<?= $value['id'] ?>)">+</button>
                                            </div>
                                            <span id="totalPrice_<?= $value['id'] ?>" class="total-price" value="<?= $value['price'] ?>"><?= $value['price'] ?></span>
                                            <span class="size-text">.00 ₽</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                    <div class="check-order-block">
                        <div class="check-order">
                            <div class="block-order">
                                <span class="text">Итого:</span>
                                <span id="totalAmount" class="total-amount"><?= $sum ?>.00 ₽</span>
                            </div>
                            <button class="order">Оформить заказ</button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <span class="<?php if (count($rsProductsFromCart) > 0) echo 'hiden' ?> cart-null" id="cartNull">Ваша Корзина пуста</span>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
    </body>

</html>