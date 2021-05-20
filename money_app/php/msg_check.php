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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="../js/datepicker.min.js"></script>
    <script src="../js/i18n/datepicker.en.js"></script>
</head>

<body>

    <header class="header">
        <h1 class="subpage-title">メッセージ登録かくにん</h1>
        <p class="site-description"> <br><br>リマインダーの通知日付</p>


<?php

$remind_title=$_POST['title'];
$remind_msg=$_POST['msg'];

print'<form method="post" class="contact-form" action="msg_check2.php">';
print'<input type="hidden" name="title" value="'.$remind_title.'">';
print'<input type="hidden" name="msg" value="'.$remind_msg.'">';
print'<input type="text" class="datepicker-here" name="due" placeholder="ここをクリック" data-language="en"><br><br><br><br><br><br><br><br><br><br><br><br><br>';
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