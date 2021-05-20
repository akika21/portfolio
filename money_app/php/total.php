
一ヶ月の利用料金表示

<?php
try
{

$dsn='mysql:dbname=moneyApp;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT title,price FROM month_money WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print $rec['title'].'---';
print $rec['price'].'yen';
print '<br>';
}
catch (Exception $e)
{
	 print 'ごめんね、表示エラー';
	 exit();
}

?>


サブスク利用料金表示

<?php
try
{

$dsn='mysql:dbname=moneyApp;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT title,price FROM subsc_money WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print $rec['title'].'---';
print $rec['price'].'yen';
print '<br>';
}
catch (Exception $e)
{
	 print 'ごめんね、表示エラー';
	 exit();
}

?>


今月の利用料金表示

<?php


?>



今月の利用料金追加

<?php

try
{

$dsn='mysql:dbname=moneyApp;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO month_money (title,price) VALUES (?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$stuff_title;
$data[]=$stuff_price;
$stmt->execute($data);

$dbh=null;

print $stuff_title;
print 'を買ったことは…<br>';
}

catch (Exception $e)
{
	print 'ごめんね、表示エラー';
	exit();
}

?>