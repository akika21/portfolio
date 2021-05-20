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
<h1 class="subpage-title">とうろく完了</h1>
<p class="site-description"> <br><br><br><br><br>お支払いは今後も続く！<br>その都度必要な出費か確かめよう<br><br></p>

<?php

$subsc_price=$_POST['price'];
$subsc_detail=$_POST['detail'];
$subsc_category=$_POST['category'];

print'<form method="post" class="contact-form" action="subsc_done.php">';
print'<input type="hidden" name="price" value="'.$subsc_price.'">';
print'<input type="hidden" name="detail" value="'.$subsc_detail.'">';
print'<input type="hidden" name="category" value="'.$subsc_category.'">';
print'<input type="submit" value="はーい！">';
print'</form>';
?>