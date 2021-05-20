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
<a href="index.php"><br><br><br><br>トップページに戻る<br><br><br></a>
<?php
try
{
  
$remind_title=$_POST['title'];
$remind_msg=$_POST['msg'];
$due_str=$_POST['due'];

$dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
$user='akika';
$password='akisan_19';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO msg_reminder (title,msg,due) VALUES (?,?,?)';
$stmt=$dbh->prepare($sql);

$data[]=$remind_title;
$data[]=$remind_msg;
$data[]=$due_str;
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
    &copy; akika's Money Management App
</footer>
</body>

</html>