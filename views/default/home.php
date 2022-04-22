<?php $pageTitle = 'Главная страница' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    
    <?php include('./views/default/header.php')?>
    <main>
        <div>
            <div>баннеры</div>
            <div>популярное</div>
            <div>
                <div>
                    <span>Женщины</span>
                    <span>Новинки</span>
                </div>
                <div class="products-women">
                    <?php foreach ($rsProductsWomen as $key => $value) {
                        $name = $value['name'];
                        $img = $value['image'];
                        $id = $value['id'];
                        $price = $value['price'];
                        echo "<div class='item-product'>";
                        echo "<a href='/product/$id/' class='product'>";
                        echo "<img class='image' src='../../accets/templats/defualt/img/$img'></img>";
                        echo "</a>";
                        echo "<a href='/product/$id/' class='name'>$name</a>";
                        echo "<span class='price'>$price ₽</span>";
                        echo "</div>";
                    } ?>
                </div>
            </div>
            <div>
                <div>
                    <span>Женщины</span>
                    <span>Новинки</span>
                </div>
                <div class="products-men">
                    <?php foreach ($rsProductsMen as $key => $value) {
                        $name = $value['name'];
                        $img = $value['image'];
                        $id = $value['id'];
                        $price = $value['price'];
                        echo "<div class='item-product'>";
                        echo "<a href='/product/$id/' class='product'>";
                        echo "<img class='image' src='../../accets/templats/defualt/img/$img'></img>";
                        echo "</a>";
                        echo "<a href='/product/$id/' class='name'>$name</a>";
                        echo "<span class='price'>$price ₽</span>";
                        echo "</div>";
                    } ?>
                </div>
            </div>
        </div>
    </main>
    <?php include('./views/default/footer.php')?>
</body>

</html>