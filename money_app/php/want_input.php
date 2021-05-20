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
        <h1 class="subpage-title">したいこと入力ページ</h1>
        <form>
        <p class="site-description"> <br><br>カテゴリー</p>
            <input type="radio" name="category" value="hobby">趣味<br>
            <input type="radio" name="category" value="study">学習<br>
            <input type="radio" name="category" value="other">その他<br><br><br><br><br>
        </form>
        <section>
        <form method="post" class="contact-form" action="want_check.php" enctype="multipart/form-data">
            画像をえらぶ
            <input type="file" name="img" style="width:115px"><br><br><br>
            <input type="text" name="title" placeholder="I wanna...">
            <textarea name="msg" placeholder="Comment"></textarea><br><br><br><br><br><br>
            <input type="button" onclick="history.back()" value="戻る">
            <input type="submit" value="かくにん画面へ">
        </form>
    </section>
</header>



    <footer class="footer">
        &copy; akika's Money Management App
    </footer>
</body>