<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваши данные</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/user.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="inner">
                <div class="inner-navigation">
                    <div class="block-href">
                        <a href="/user/">История заказов</a>
                        <a href="/user/adress/">Адрес доставки</a>
                        <a href="/user/disconds/">Скидки и бонусы</a>
                        <a href="/user/contacts/">Контактные данные</a>
                        <a href="/logout/">выход</a>
                    </div>
                </div>
                <div class="inner-content">
                    <h2 class="content-title">Контакты</h2>
                    <div class="content-info">
                        <form class="form-content" method="POST" action="/user/uppdate/">
                            <div class="<?php if ($messageok === null) echo 'hiden'; ?> up-message-form">
                                <div class="block-message-ok">
                                    <span><?= $messageok ?></span>
                                </div>
                            </div>
                            <div class="<?php if ($message === null) echo 'hiden'; ?> up-message-form">
                                <div class="block-message-no">
                                    <span><?= $message ?></span>
                                </div>
                            </div>
                            <div class="item-form">
                                <label for="userEmail">Email</label>
                                <input class="span input" disabled id="userEmail" name="userEmail" type="text" 
                                value="<?= $_SESSION['user']['email'] ?>">
                            </div>
                            <div class="item-form">
                                <label for="userLogin">Логин</label>
                                <input class="input" id="userLogin" name="userLogin" type="text" 
                                value="<?= $_SESSION['user']['login'] ?>">
                            </div>
                            <div class="item-form">
                                <label for="userPhone">Контактный телефон</label>
                                <input class="input" id="userPhone" name="userPhone" type="text" 
                                value="<?= $_SESSION['user']['phone'] ?>">
                            </div>
                            <div class="item-form-check" onclick="checkCheckBox()">
                                <input id="userCheck" name="userCheck" type="checkbox">
                                <label for="userCheck">Сменить пароль</label>
                            </div>
                            <div class="hiden item-form-block" id='checkBlock'>
                                <div class="item-form">
                                    <label for="userOldPas">Старый пароль</label>
                                    <input class="input" id="userOldPas" name="userOldPas" type="password" value="">
                                </div>
                                <div class="item-form">
                                    <label for="userNewPas">Новый пароль</label>
                                    <input class="input" id="userNewPas" name="userNewPas" type="password" value="">
                                </div>
                                <div class="item-form">
                                    <label for="userNewPas1">Повторите пароль</label>
                                    <input class="input" id="userNewPas1" name="userNewPas1" type="password" value="">
                                </div>
                            </div>
                            <div>
                                <button class="btm-updata">Сохранить данные</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>

    </body>

</html>