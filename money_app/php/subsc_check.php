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
        <h1 class="subpage-title">サブスク確認ページ</h1>
        <form>
        <p class="site-description"> <br><br>サブスクのカテゴリー</p>
            <input type="radio" name="category" value="hobby">趣味<br>
            <input type="radio" name="category" value="study">学習<br>
            <input type="radio" name="category" value="donation">募金<br><br><br><br><br>
        </form>

<?php

$subsc_price=$_POST['price'];
$subsc_detail=$_POST['detail'];

print'<form method="post" class="contact-form" action="subsc_check2.php">';
print'<input type="hidden" name="price" value="'.$subsc_price.'">';
print'<input type="hidden" name="detail" value="'.$subsc_detail.'">';
print'<br>';
print'<input type="button" onclick="history.back()" value="戻る">';
print'<input type="submit" value="入力完了！">';
print'</form>';
?>
</header>

<footer class="footer">
        &copy; akika's Money Management App
</footer>

</body>

</html>