<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>我的購物車</title>
</head>
<body>
    <h1>購物車內容</h1>

    <?php
    if (isset($_COOKIE['my_cart'])) {
        echo "<p>您目前選購的商品是：<b>" . $_COOKIE['my_cart'] . "</b></p>";
    } else {
        echo "<p>購物車目前是空的喔！</p>";
    }
    ?>

    <hr>
    <a href="catalog.php">繼續購物</a> | 
    <a href="delete.php" style="color: red;">刪除商品 (清除 Cookie)</a>
</body>
</html>