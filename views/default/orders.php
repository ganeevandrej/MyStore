<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваши заказы</title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/user.css">

    <?php include('./views/default/header.php')?>
    <main>
        <div class="wrapper">
            <div  class="inner">
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
                    <h1 class="content-title">История заказов</h1>
                    <div>
                        <table class="table-order">
                            <tr class="table-row title">
                                <td class="table-td">Дата оформления</td>
                                <td class="table-td">Номер заказа</td>
                                <td class="table-td">Статус</td>
                                <td class="table-td rigth">Оплата</td>
                                <td class="table-td rigth">Сумма заказа</td>
                            </tr>
                            <?php foreach($ordersUser as $key=>$value):?>
                                <tr class="table-row font">
                                    <td class="table-td"><?=$value['date_created']?></td>
                                    <td class="table-td id"><?=$value['id']?></td>
                                    <td class="table-td">Принят</td>
                                    <td class="table-td rigth">Не оплачен</td>
                                    <td class="table-td rigth"><?=$value['price']?> ₽</td>
                                </tr>
                            <?php endforeach;?>
                            <tr class="table-row">
                                <td class="table-td"></td>
                                <td class="table-td"></td>
                                <td class="table-td"></td>
                                <td class="table-td rigth"></td>
                                <td class="table-td rigth">Сумма выполненных заказов: 0 ₽</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php')?>
    
</body>
</html>