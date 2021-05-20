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
<a href="index.php"><br><br><br><br>トップページに戻る<br><br><br></a>
<?php
try
{

$subsc_price=$_POST['price'];
$subsc_detail=$_POST['detail'];
$subsc_category=$_POST['category'];

$dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
$user='akika';
$password='akisan_19';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO subsc_money (price,category,detail) VALUES (?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$subsc_price;
if($category=='hobby')
{
    $data[]=1;
}
else if($category=='study')
{
    $data[]=2;
}
else
{
    $data[]=3;
}
$data[]=$subsc_detail;
$stmt->execute($data);

$dbh=null;
}
catch (Exception $e)
{
	print 'ごめんね、表示エラー';
	exit();
}
?>
</header>
<footer class="footer">
    ©︎ akika's Money Management App
</footer>
</body>

</html>