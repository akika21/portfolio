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
        <div class="contact-check" id="contact-check">
<?php

$contact_name=$_POST['name'];
$contact_mail=$_POST['mail'];
$contact_msg=$_POST['msg'];

    print 'お名前：';
	print $contact_name;
    print '<br><br><br>';
    print 'メールアドレス：';
	print $contact_mail;
    print '<br><br><br>';
    print 'メッセージ：';
	print $contact_msg;
    print '<br><br><br>この内容で送信しますか？';
    print'<form method="post" class="contact-form" action="contact_done.php">';
print'<input type="hidden" name="name" value="'.$contact_name.'">';
print'<input type="hidden" name="mail" value="'.$contact_mail.'">';
print'<input type="hidden" name="msg" value="'.$contact_msg.'">';
print'<input type="button" onclick="history.back()" value="戻る">';
print'<input type="submit" value="SEND">';
print'</form>';
?>
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