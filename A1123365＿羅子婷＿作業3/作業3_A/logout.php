<?php
session_start();

session_unset();
session_destroy();

if (isset($_COOKIE['saved_user_id'])) {
    setcookie("saved_user_id", "", time() - 3600, "/");
}

header("Location: login.php");
exit();
?>