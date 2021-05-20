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

$want_title=$_POST['title'];
$want_msg=$_POST['msg'];
$want_img=$_FILES['img'];

if($want_title=='')
{
	print 'タイトルが入力されていません。<br />';
}
else
{
	print 'したいこと:';
	print $want_title;
	print '<br><br><br>';
}
	print $want_msg;
    print '<br><br><br><br>';
    
    if($want_img['size']>0)
    {
        if($want_img['size']>1000000)
        {
            print '画像が大き過ぎます';
        }
        else
        {
            move_uploaded_file($want_img['tmp_name'],'../image/'.$want_img['name']);
            print '<img src="../image/'.$want_img['name'].'">';
            print '<br>';
        }
    }
    
    print '<br>';
	print '<form method="post" class="contact-form" action="want_done.php">';
	print '<input type="hidden" name="title" value="'.$want_title.'">';
	print '<input type="hidden" name="msg" value="'.$want_msg.'">';
	print '<input type="hidden" name="img_name" value="'.$want_img['name'] .'">';
    print '<br>';
	print '<input type="button" onclick="history.back()" value="戻る">';
	print '<input type="submit" value="とうろく完了！">';
    print '</form>';
    ?>
        </div>
        </body>
</html>