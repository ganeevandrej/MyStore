<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>

    <?php include('./views/default/header.php') ?>
    <main>
        <div>
            <div>
                <h1>Авторизация</h1>
                <form  style="display: flex; flex-direction: column; align-items:start;" 
                method="POST" action="/login/login/">
                    <span><?=$inputValidation?></span>
                    <input type="text" id="email" name="email" placeholder="Введите email" value="">
                    <input type="password" id="pwd1" name="pwd1" placeholder="Введите пароль" value="">
                    <button type="submit" name="btm-login">Войти</button>
                </form>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
</body>
</html>