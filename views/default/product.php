<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$product['name']?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/style.css">
    <script src="../../accets/templats/defualt/js/index.js"></script>
</head>
<body>
    <?php include('./views/default/header.php')?>
    <main>
        <div class="product-panel">Печеньки</div>
        <div class="product-block">
            <div class="product-image">
                <?php 
                    $img = $product['image'];
                    $name = $product['name'];
                    $id = $product['id'];
                    $price = $product['price'];
                    echo "<img src='../../accets/templats/defualt/img/$img' alt=''>"
                ?>
            </div>
            <div class="product-discription">
                <h1><?=$name?></h1>
                <h2><?=$price?></h2>
                <button id="addCart_<?=$id?>" onclick="addToCart(<?=$id?>)">В корзину</button>
                <button id="removeCart_<?=$id?>" onclick="removeToCart(<?=$id?>)" style="display: none;">Удалить из карзины</button>
                <span id="cartCountItems"></span>
            </div>
        </div>
        <div></div>
        <div></div>
    </main>
</body>
</html>