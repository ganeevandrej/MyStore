<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/auth.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="inner-reg">
                <h1 class="title-reg">Регистрация</h1>
                <form class="form-reg" method="POST" action="/auth/regist/">
                    <div class="<?php if($inputValidation === null) echo 'hiden';?> reg-message-form">
                        <div class="block-message">
                            <span><?= $inputValidation ?></span>
                        </div>
                    </div>
                    <div class="reg-item-form">
                        <label for="name">Имя</label>
                        <input  class="input" type="text" id="name" name="name" value="">
                    </div>
                    <div class="reg-item-form">
                        <label for="email">email</label>
                        <input  class="input" type="text" id="email" name="email" value="">
                    </div>

                    <div class="reg-item-form">
                        <label for="surname">Фамилия</label>
                        <input  class="input" type="text" id="surname" name="surname" value="">
                    </div>
                    <div class="reg-item-form">
                        <label for="phone">Телефон</label>
                        <input  class="input" type="text" id="phone" name="phone" value="">
                    </div>
                    <div class="reg-item-form">
                        <label for="patronymic">Отчество</label>
                        <input  class="input" type="text" id="patronymic" name="patronymic" value="">
                    </div>
                    <div class="reg-item-form">
                        <label for="pwd1">Пароль</label>
                        <input  class="input" type="password" id="pwd1" name="pwd1" value="">
                    </div>
                    <div class="reg-item-form">
                        <label for="login">login</label>
                        <input  class="input" type="text" id="login" name="login" value="">
                    </div>
                    <div class="reg-item-form">
                        <label for="pwd2">Повторите пароль</label>
                        <input  class="input" type="password" id="pwd2" name="pwd2" value="">
                    </div>
                    <div>
                        <button class="btm-reg" name="btm-auth" type="submit">Регистрация</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
    </body>

</html>