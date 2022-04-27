<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/auth.css">

    <?php include('./views/default/header.php') ?>
    <main>
        <div class="wrapper">
            <div class="inner-reg">
                <h1 class="title-reg">Авторизация</h1>
                <form class="form-login" method="POST" action="/login/login/">
                    <div class="<?php if($inputValidation === null) echo 'hiden';?> up-message-form">
                        <div class="block-message">
                            <span><?= $inputValidation ?></span>
                        </div>
                    </div>
                    <div class="login-item-form">
                        <label for="email">email</label>
                        <input class="input" type="text" id="email" name="email" value="">
                    </div>
                    <div class="login-item-form">
                        <label for="pwd1">Пароль</label>
                        <input class="input" type="password" id="pwd1" name="pwd1" value="">
                    </div>

                    <button class="btm-reg" type="submit" name="btm-login">Войти</button>
                </form>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
    </body>

</html>