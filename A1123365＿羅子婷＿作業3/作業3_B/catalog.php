<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>商品目錄頁面</title>
    <style>
        body { font-family: "微軟正黑體", sans-serif; background-color: #fafafa; padding: 30px; }
        .container { background-color: #ffffff; border: 1px solid #ccc; width: 450px; padding: 20px; margin: auto; }
        h2 { border-bottom: 2px solid #333; padding-bottom: 10px; }
        
        .buy-btn {
            background-color: #4CAF50; 
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
        }
        .buy-btn:hover { background-color: #45a049; }
        
        .user-box { background-color: #eee; padding: 10px; margin-bottom: 15px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>我的小賣店 - 商品目錄</h2>
        
        <div class="user-box">
            登入者 ID：<strong><?php echo $_COOKIE['user_id'] ?? "未設定"; ?></strong>
        </div>

        <table width="100%" cellpadding="10">
            <tr>
                <td><strong>1. 基礎筆記本</strong></td>
                <td align="right"><a href="savecart.php?item=Notebook" class="buy-btn">放入購物車</a></td>
            </tr>
            <tr>
                <td><strong>2. 原子筆套裝</strong></td>
                <td align="right"><a href="savecart.php?item=PenSet" class="buy-btn">放入購物車</a></td>
            </tr>
        </table>

        <hr>
        <p align="center">
            <a href="shoppingcart.php">前往購物車查看結帳項目</a>
        </p>
    </div>
</body>
</html>