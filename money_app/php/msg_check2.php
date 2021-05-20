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
<h1 class="subpage-title">とうろく完了</h1>
<p class="site-description"> <br><br><br><br><br>これからもファイトー！<br><br></p>

<?php

$remind_title=$_POST['title'];
$remind_msg=$_POST['msg'];
$remind_due=$_POST['due'];

$due_ex=explode("/", $remind_due);
$due_str=$due_ex[2].'-'.$due_ex[0].'-'.$due_ex[1];


print'<form method="post" class="contact-form" action="msg_done.php">';
print'<input type="hidden" name="title" value="'.$remind_title.'">';
print'<input type="hidden" name="msg" value="'.$remind_msg.'">';
print'<input type="hidden" name="due" value="'.$due_str.'">';
print'<input type="submit" value="ありがとー！">';
print'</form>';
?>
