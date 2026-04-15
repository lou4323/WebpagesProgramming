<?php

if (isset($_COOKIE['my_cart'])) {
    setcookie("my_cart", "", time() - 3600, "/");
}

header("Location: shoppingcart.php");
exit();
?>