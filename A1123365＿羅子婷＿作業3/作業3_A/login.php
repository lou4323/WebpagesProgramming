<?php
session_start();

$users = [
    'admin01'   => ['pw123', 'admin'],
    'teacher01' => ['pw456', 'teacher'],
    'student01' => ['pw789', 'student']
];

$error_msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_user = $_POST['user_id'];
    $input_pw   = $_POST['password'];

    if (isset($users[$input_user]) && $users[$input_user][0] === $input_pw) {
        $_SESSION['user_id'] = $input_user;
        $_SESSION['role']    = $users[$input_user][1];

        setcookie("saved_user_id", $input_user, time() + 3600, "/");

        header("Location: index2.php");
        exit();
    } else {
        $error_msg = "帳號或密碼錯誤！";
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>系統登入</title>
</head>
<body>
    <h2>校務系統登入</h2>
    
    <?php if($error_msg): ?>
        <p style="color: red;"><?php echo $error_msg; ?></p>
    <?php endif; ?>

    <form method="post">
        帳號: <input type="text" name="user_id" required><br><br>
        密碼: <input type="password" name="password" required><br><br>
        <button type="submit">登入</button>
    </form>

    <hr>
    
</body>
</html>