<html>
<head>
    <title>確認報名資訊</title>
    <meta charset="utf-8">
</head>
<body bgcolor="#fdf5e6">
    <center>
        <br><br>
        <h1 style="color: green;">報名表已送出</h1>
        
        <?php
            
            $name = $_POST["user_name"];
            $id = $_POST["user_id"];
            $phone = $_POST["user_phone"];
            $food = $_POST["food"];
        ?>

        <table border="1" width="350" bgcolor="white">
            <tr bgcolor="#DFF0D8">
                <th colspan="2">您的報名資料摘要</th>
            </tr>
            <tr>
                <td width="120"><b>姓名</b></td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td><b>學號</b></td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td><b>電話</b></td>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <td><b>飲食</b></td>
                <td><?php echo $food; ?></td>
            </tr>
        </table>

        <br>
        <p><b>感謝您的參與，系統已記錄您的報名資訊。</b></p>
        <p>我們將會透過電話與您聯繫，確認後續事宜。</p>
        
        
        
       
        <a href="login.html">
        <button type="button">返回登入首頁</button>
        </a>
    </center>
</body>
</html>