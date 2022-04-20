<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $rsCategory['name'] ?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/style.css">
    <script src="../../accets/templats/defualt/js/index.js"></script>
</head>

<body>
    <?php include('./views/default/header.php') ?>
    <main>
        <div class="products-title">
            <h1><?= $rsCategory['name'] ?></h1>
        </div>
        <div class="products-filter"></div>
        <div class="propducts-items">
            <?php foreach ($rsCategoties as $key => $value) {
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
    </main>
    <footer></footer>
</body>

</html>