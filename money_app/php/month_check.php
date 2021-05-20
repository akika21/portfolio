<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>akika's Money Management App</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header">
        <h1 class="subpage-title">お支払いのチェック</h1>
        <form>
        <p class="site-description"> <br><br>買ったもののカテゴリー</p>
            <input type="radio" name="category" value="cloth">服<br>
            <input type="radio" name="category" value="cosme">コスメ<br>
            <input type="radio" name="category" value="interior">インテリア<br>
            <input type="radio" name="category" value="hobby">その他趣味<br>
            <input type="radio" name="category" value="daily">日用品<br>
            <input type="radio" name="category" value="study">学習関連<br><br><br><br><br>
        </form>
        <form>
        <p class="site-description"> <br><br>今回のお買いものは、、</p>
            <input type="radio" name="check" value="excellent">最高の買い物！！<br>
            <input type="radio" name="check" value="good">まあ買ってよかったよー<br>
            <input type="radio" name="check" value="fair">買わなくてもよかったかも、<br>
            <input type="radio" name="check" value="poor">買わなきゃよかった…<br><br><br><br><br>
        </form>

<?php

$month_price=$_POST['price'];
$month_detail=$_POST['detail'];

print'<form method="post" class="contact-form" action="month_check2.php">';
print'<input type="hidden" name="price" value="'.$month_price.'">';
print'<input type="hidden" name="detail" value="'.$month_detail.'">';
print'<br>';
print'<input type="button" onclick="history.back()" value="戻る">';
print'<input type="submit" value="入力完了！">';
print'</form>';
?>
</header>

<footer class="footer">
        ©︎ akika's Money Management App
</footer>

</body>

</html>