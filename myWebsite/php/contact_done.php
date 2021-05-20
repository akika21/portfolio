<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>akika's website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/drawer.css">
</head>

<body>
    <header class="header">
        <div class="hamburger" id="open_nav">
            <img src="../image/hamburger.png" alt="">
        </div>
<?php

try
{

$contact_name=$_POST['name'];
$contact_mail=$_POST['mail'];
$contact_msg=$_POST['msg'];

$dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
$user='akika';
$password='akisan_19';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO contact_msg (name,mail,msg) VALUES (?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$contact_name;
$data[]=$contact_mail;
$data[]=$contact_msg;
$stmt->execute($data);

$dbh=null;

print 'メッセージを送信しました。<br>';
print 'お問い合わせありがとうございます！<br>';
print '後ほどこちらから、お返しのメールを送信させていただきます<br>';

}
catch(Exception $e)
{
	print'ごめんなさい、エラーです。';
	exit();
}

?>
<div class="contact-form">
<a href="../html/index.html">ホーム画面へ</a>
        </div>
        <footer class="footer">
        &copy; akika's website
    </footer>
    <nav id="nav">
        <div class="logo"><img src="" alt=""></div>
        <ul>
            <li><a class="sidemenu" href="#background">background</a></li>
            <li><a class="sidemenu" href="#favorites">favorites</a></li>
            <li><a class="sidemenu" href="#character">character</a></li>
            <li><a class="sidemenu" href="#contact">contact</a></li>
        </ul>
    </nav>
    </header>
</body>
</html>