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
        <p class="site-description"> <br><br>かくにん画面</p>
        <div class="contact-form">

<?php

try
{

$want_title=$_POST['title'];
$want_msg=$_POST['msg'];
$want_img_name=$_POST['img_name'];

$dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
$user='akika';
$password='akisan_19';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO want_thing (title,msg,img) VALUES (?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$want_title;
$data[]=$want_msg;
$data[]=$want_img_name;
$stmt->execute($data);

$dbh=null;

print $want_title;
print 'を追加しました。<br>';

}
catch(Exception $e)
{
	print'ごめんね、表示エラー';
	exit();
}

?>

<a href="index.php">ホーム画面へ</a>
        </div>
</body>
</html>