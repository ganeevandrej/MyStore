<?php $pageTitle = 'Главная страница' ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/index.css">
</head>

<body>
    <header>
        <div>
            <div>
                <div>
                    <img src="../../accets/templats/defualt/img/" alt="">
                </div>
                <div></div>
                <div></div>
                <div>
                    <?php foreach ($rsCategories as $key => $value) {
                        $name = $value['name'];
                        $id = $value['id'];
                        $subcategories = $value['subcategories'];
                        echo "<a class='categories' href='#'>$name</a>";
                        echo "<ul class='subcategoties'>";
                        foreach ($subcategories as $key => $value) {
                            $subname = $value['name'];
                            $sub_id = $value['id'];
                            echo "<li><a href='/?controller=categories&categories_id=$id&subcategories_id=$sub_id'>$subname</a></ali>";
                        }
                        echo "</ul>";
                    } ?>
                </div>
            </div>
        </div>
    </header>
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
                        $price = $value['price'];
                        echo "<div class='item-product'>";
                        echo "<a href='#' class='product'>";
                        echo "<img class='image' src='../../accets/templats/defualt/img/$img'></img>";
                        echo "</a>";
                        echo "<a href='#' class='name'>$name</a>";
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
                        $price = $value['price'];
                        echo "<div class='item-product'>";
                        echo "<a href='#' class='product'>";
                        echo "<img class='image' src='../../accets/templats/defualt/img/$img'></img>";
                        echo "</a>";
                        echo "<a href='#' class='name'>$name</a>";
                        echo "<span class='price'>$price ₽</span>";
                        echo "</div>";
                    } ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            footer
        </div>
    </footer>
</body>

</html>