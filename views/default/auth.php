<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>

    <?php include('./views/default/header.php') ?>
    <main>
        <div>
            <h1>Регистрация</h1>
            <div>
                <form style="display: flex; flex-direction: column; align-items:start;" 
                method="POST" action="/auth/regist/">
                    <span><?=$inputValidation?></span>
                    <input type="text" id="login" name="login" placeholder="Введите Имя" value="">
                    <input type="text" id="email" name="email" placeholder="Введите email" value="">
                    <input type="text" id="phone" name="phone" placeholder="Введите телефон" value="">
                    <input type="password" id="pwd1" name="pwd1" placeholder="Введите пароль" value="">
                    <input type="password" id="pwd2" name="pwd2" placeholder="Повторите пароль" value="">
                    <button name="btm-auth" type="submit">Регистрация</button>
                </form>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php') ?>
</body>
</html>