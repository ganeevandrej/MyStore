<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/order.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <form method="POST" action="/cart/saveorder/" class="order-inner">
                <div class="order-data-user">
                    <h1 class="title">Оформление заказа</h1>
                    <div class="login-user">
                        <h3 class="title-order">Вы авторизировались как
                            <?= $_SESSION['user']['surname'] . ' ' . $_SESSION['user']['name'] . ' ' .
                                $_SESSION['user']['patronymic'] ?>
                        </h3>
                        <span><?= $_SESSION['user']['phone'] ?></span>
                        <span><?= $_SESSION['user']['email'] ?></span>
                        <a href="/logout/" class="order">Выход</a>
                    </div>
                    <div class="delivery">
                        <h2>Доставка</h2>
                        <div class="adress-delivery">
                            <label for="">Населеный пункт</label>
                            <input id="" name="adressDelivery" type="text" value="г. Москва, 800-Летия Москвы ул., 28, стр. 1">
                        </div>
                        <div class="radio-inputs">
                            <div class="self-call" onclick="checkedCallok()">
                                <input id="self" name="ardess" checked=true type="radio">
                                <div class="radio-name">
                                    <label for="self" class="radio-name-title">Самовызов</label>
                                    <span class="radio-name-subtitle">На пункте выдаче</span>
                                </div>
                                <span class="radio-price">+ 0 ₽</span>
                            </div>
                            <div class="self-call" onclick="checkedCalldel()">
                                <input id="courier" name="ardess" type="radio">
                                <div class="radio-name">
                                    <label for="courier" class="radio-name-title">Курьером</label>
                                    <span class="radio-name-subtitle">Доставка курьером</span>
                                </div>
                                <span class="radio-price">+ 300 ₽</span>
                            </div>
                        </div>
                        <div class="koment">
                            <label for="">Комментарии к заказу</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="user-data">
                        <h2>Получатель</h2>
                        <div>
                            <div class="adress-delivery">
                                <label for="">Контактное лицо (ФИО)</label>
                                <input name="userData" type="text" 
                                value="<?= $_SESSION['user']['surname'] . ' ' .$_SESSION['user']['name'] . ' ' .
                                $_SESSION['user']['patronymic'] ?>">
                            </div>
                            <div class="adress-delivery">
                                <label for="">Контактный телефон</label>
                                <input name="userPhone" type="text" value="<?= $_SESSION['user']['phone'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="payment">
                        <h2 class="sub-order">Способ оплаты</h2>
                        <div class="self-call">
                            <input name="paymentMethod" type="radio">
                            <div class="radio-name">
                            <span class="radio-name-title">Наличными курьеру</span>
                            <span class="radio-name-subtitle">Наличными курьеру</span>
                            </div>
                        </div>
                    </div>
                    <button class="orders">Подтвердить заказ</button>
                </div>
                <div class="order-info-product">
                    <div class="products-from-cart">
                        <?php $sum=0; ?>
                        <?php foreach ($rsProducts as $key => $value) : ?>
                            <?php $sum = $sum + ($_POST[$value['id']] * $value['price']); ?>
                            <div class="product-item-cart">
                                <div class="product-item-photo">
                                    <img src="/accets/templats/defualt/img/<?= $value['image'] ?>">
                                </div>
                                <div class="product-item-name">
                                    <span><?= $value['name'] ?></span>
                                </div>
                                <div class="product-item-price">
                                    <span><?php print_r($_POST[$value['id']]) ?></span>x
                                    <span><?= $value['price'] ?> ₽</span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="count-and-price">
                        <div class="price-product-order">
                            <span class="title-order-price">Сумма по товарам</span>
                            <span class="order-price"><?=$sum?></span>
                            <span class="rub">₽</span>
                        </div>
                        <div class="price-delivery-order">
                            <span class="title-order-price">Стоимость доставки</span>
                            <span id="delivery" class="order-price">0</span>
                            <span class="rub">₽</span>
                        </div>
                    </div>
                    <div class="title-price-order">
                        <span class="title--price">Итого:</span>
                        <span id="titlePrice" class="order-price"><?=$sum?></span>
                        <input id="inpTitlePrice" name="price" type="hidden" value="<?=$sum?>">
                        <span class="rub">₽</span>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>

    </body>

</html>