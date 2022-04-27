<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$product['name']?></title>
    <link rel="stylesheet" href="../../accets/templats/defualt/css/footer.css">

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

                <?php $itemInCArt = in_array($id, $_SESSION['cart'])?>

                <button id="addCart_<?=$id?>" 
                    <?php if ($itemInCArt) {echo "class='hiden' ";}?>  
                    onclick="addToCart(<?=$id?>, <?=$_SESSION['user']?>)">Добавить В корзину</button>
                <button id="removeCart_<?=$id?>" 
                    <?php if (!$itemInCArt) {echo "class='hiden' ";}?> 
                    onclick="removeFromCart(<?=$id?>, <?=$_SESSION['user']?>)">Удалить из карзины</button>
            </div>
        </div>
        <div></div>
        <div></div>
    </main>
    <?php include('./views/default/footer.php')?>
</body>
</html>