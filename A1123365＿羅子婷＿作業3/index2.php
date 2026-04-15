<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$role = $_SESSION['role'];
$user_id = isset($_COOKIE['saved_user_id']) ? $_COOKIE['saved_user_id'] : "未知";
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>控制台</title>
</head>
<body>
    <h1>您好，<?php echo htmlspecialchars($user_id); ?>！</h1>
    <p>目前登入身份：<strong><?php echo $role; ?></strong></p>

    <div style="border: 1px solid #ccc; padding: 15px; margin-top: 20px;">
        <?php if ($role == 'admin'): ?>
            <h3>【管理員面板】</h3>
            <ul>
                <li>伺服器狀態監控</li>
                <li>帳號權限管理</li>
            </ul>
        <?php elseif ($role == 'teacher'): ?>
            <h3>【教師教學系統】</h3>
            <ul>
                <li>上傳課程講義</li>
                <li>批改學生作業</li>
            </ul>
        <?php else: ?>
            <h3>【學生學習專區】</h3>
            <ul>
                <li>查看期中考成績</li>
                <li>線上選課系統</li>
            </ul>
        <?php endif; ?>
    </div>

    <p><a href="logout.php">安全登出 (清除 Session 與 Cookie)</a></p>
</body>
</html>