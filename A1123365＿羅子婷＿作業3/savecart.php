<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>我的購物車清單</title>
    <style>
        body { font-family: "微軟正黑體", sans-serif; background-color: #fafafa; padding: 30px; }
        .cart-container { background-color: #fff; border: 1px solid #ccc; width: 400px; padding: 20px; margin: auto; text-align: center; }
        
        .item-display { 
            margin: 20px 0; 
            padding: 15px; 
            border: 1px dashed #f00; 
            background-color: #fff5f5; 
            font-weight: bold;
        }
        
        .del-btn {
            background-color: #f44336; 
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 3px;
        }
        .del-btn:hover { background-color: #d32f2f; }
        
        .nav-links { margin-top: 30px; font-size: 13px; }
    </style>
</head>
<body>
    <div class="cart-container">
        <h2>🛒 您的購物車內容</h2>

        <?php if (isset($_COOKIE['my_cart'])): ?>
            <div class="item-display">
                目前選擇的商品：<?php echo htmlspecialchars($_COOKIE['my_cart']); ?>
            </div>
            <a href="delete.php" class="del-btn">清空購物車紀錄</a>
        <?php else: ?>
            <p>購物車目前沒有東西喔！</p>
        <?php endif; ?>

        <div class="nav-links">
            <a href="catalog.php">回到商品目錄</a>
        </div>
    </div>
</body>
</html>