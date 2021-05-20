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
    <script type="text/javascript"　src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
 　　<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.7/push.min.js"></script> 
</head>
<body>
<script type="text/javascript">
    Push.create("ようこそ", {
        body: "家計簿アプリだよ",
        icon: '', // 右側に表示される画像のパス
        timeout: 8000,
        onClick: function () {
            location.href = 'index.php';
            this.close();
        }
    });
</script>
    <header class="header">
        <h1 class="site-title">おかね の かんり</h1>
        <p class="site-description"> あなたの未来をより良くするアプリ。</p>
        <div class="buttons">
            <a class="button" href="#used">今月のお買いもの</a>
            <a class="button button-showy" href="#used">サブスク管理</a>
        </div>
    </header>
    <section class="total" id="total">
        <h2 class="heading">今月つかった金額</h2>
        <h1 class="totalMonay"><br>
<?php
try
{

$dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
$user='akika';
$password='akisan_19';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT SUM(t.price) AS total_money FROM(SELECT price FROM month_money WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())
 UNION ALL SELECT price FROM subsc_money)t';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$row=$dbh->query($sql)->fetch();


$dbh=null;

print '¥';
print $row['total_money'];
}

catch (Exception $e)
{
var_dump($e);
	 print '---';
	 exit();
}
?>
</h1>
        <br>(今んとこ。もっと増えそうだよ ><)<br><br><br><br>明細<br><br>|<br>|<br>|<br>|<br>|<br>|<br>↓
            <p class="background-text">
                <div class="detail-wrapper">
                    <div class="used-box">
                        <u>今月のお買いもの</u><br><br>
<?php
try
{

$dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
$user='akika';
$password='akisan_19';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT detail,price FROM month_money WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print $rec['detail'].'---';
    print $rec['price'].'yen';
    print '<br>';
}

}
catch (Exception $e)
{
	 print 'ごめんね、表示エラー';
	 exit();
}

?>

                    </div>
                    <div class="used-box">
                        <u>サブスク利用金額</u><br><br>
                        <?php
try {
    $dsn='mysql:dbname=akika_database;host=mysql57.akika.sakura.ne.jp;charset=utf8';
    $user='akika';
    $password='akisan_19';
    $dbh=new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql='SELECT detail,price FROM subsc_money WHERE 1';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();

    $dbh=null;

    while (true) {
        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec==false) {
            break;
        }
        print $rec['detail'].'---';
        print $rec['price'].'yen';
        print '<br>';
    }

    }
catch (Exception $e)
{
	 print 'ごめんね、表示エラー';
	 exit();
}

?>                    
                    </div>
                </div>
            </p>


            <br><br><br>クレカ利用金額の推移
            <canvas id="myChart" name="myChart"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script type="text/javascript" src="https://github.com/nagix/chartjs-plugin-colorschemes/releases/download/v0.2.0/chartjs-plugin-colorschemes.min.js"></script>
 <script>
 var ctx = document.getElementById('myChart').getContext('2d');
 var chart = new Chart(ctx, {
     type: 'line',
 
     // クレカ引き落とし金額を入力（ここは手入力で、危機感をもつ！！）
     data: {
         labels: ['1月', '2月', '3月', '4月', '5月', '6月', '7月','8月','9月','10月','11月','12月'],
         datasets: [{
             label: '引き落とし額',
             borderColor: 'rgb(75, 192, 192)',
             fill: false,
             data: [0, 125974, 85943, 92222]
         }]
     },
     // 設定
     options: { 
       //タイトル
       title: {
         display: true,
         text: '',
       }
    }
});

</script>
            <p class="background-text">
                <br>大学卒業まで、あと<p class="timer"><span id="day"></span>日<span id="hour"></span>時間<span
                        id="min"></span>分<span id="sec"></span></span>秒</p>
                <br><br>それまでに、やりたいこと叶えるために...<br><br><br><br>
            </p>
    </section>
    <section class="used" id="used">
        <h2 class="heading">利用金額かんり画面</h2>
        <div class="used-wrapper">
            <div class="used-box">
                <form method="post" class="contact-form" action="month_check.php">

                    <h2>今月のお支払い追加<br><br></h2>
                    <input type="text" name="price" placeholder="Price">
                    <textarea name="detail" placeholder="Memo"></textarea>
                    <input type="submit" value="SEND">
                </form>
            </div>
            <div class="used-box">
                <form method="post" class="contact-form" action="subsc_check.php">
                    <h2>サブスク登録<br><br></h2>
                    <input type="text" name="price" placeholder="Price">
                    <textarea name="detail" placeholder="Memo"></textarea>
                    <input type="submit" value="SEND">
                </form>
            </div>
        </div>
        これは本当に大切な買いものだったか、考えよう！
    </section>
    <section class="fav" id="favorites">
        <h2 class="heading">お金をためて、したい事！</h2>
        <div class="fav-wrapper">
            <div class="fav-box cafe">
                <img class="fav-image" src="../image/cafe.jpg" alt="カフェスイーツの写真">
                <div class="fav-description">
                    <div class="fav-description-inner">
                        <p class="fav-text">
                            ex) カフェ巡り<br>
                            カフェでコーヒーと共に<br>
                            美味しい季節のスイーツを<br>
                            頂きたい！<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="fav-box live">
                <img class="fav-image" src="../image/live.jpg" alt="">
                <div class="fav-description">
                    <div class="fav-description-inner">
                        <p class="fav-text">
                            したいこと<br>
                            <br>
                            もっと見る！<br>
                            <br>
                            <a href="want_read.html" class="button button-ghost">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="fav-box walk">
                <img class="fav-image" src="../image/walk.jpg" alt="">
                <div class="fav-description">
                    <div class="fav-description-inner">
                        <p class="fav-text">
                            したいこと<br>
                            <br>
                            もっと加える！<br>
                            <br>
                            <a href="want_input.php" class="button button-ghost">入力ページへ</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">将来の自分へ、メッセージ</h2>
        <form method="post" class="contact-form" action="msg_check.php">
            <input type="text" name="title" placeholder="Title">
            <textarea name="msg" placeholder="Message　ex)もうすぐ箱根旅行！旅行をめいいっぱい楽しむため今はムダ使いしないー！"></textarea>
            <input type="submit" value="SEND">
        </form>
    </section>
    <footer class="footer">
        &copy; akika's Money Management App
    </footer>

    <script>
        'use strict';

        function countdown(due) {
            const now = new Date();

            const rest = due.getTime() - now.getTime();
            const sec = Math.floor(rest / 1000) % 60;
            const min = Math.floor(rest / 1000 / 60) % 60;
            const hours = Math.floor(rest / 1000 / 60 / 60) % 24;
            const days = Math.floor(rest / 1000 / 60 / 60 / 24);
            const count = [days, hours, min, sec];

            return count;
        }

        const goal = new Date(2024, 3, 25);

        console.log(countdown(goal));

        function recalc() {
            const counter = countdown(goal);
            document.getElementById('day').textContent = counter[0];
            document.getElementById('hour').textContent = counter[1];
            document.getElementById('min').textContent = String(counter[2]).padStart(2, '0');
            document.getElementById('sec').textContent = String(counter[3]).padStart(2, '0');
            refresh();
        }

        function refresh() {
            setTimeout(recalc, 1000);
        }

        recalc();
    </script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script>
        'use strict';

        $(document).ready(function () {
            $('#open_nav').on('click', function () {
                $('#wrapper, #nav').toggleClass('show');
            });
            $('.sidemenu').on('click', function () {
                $('#wrapper, #nav').toggleClass('show');
            });
        });
    </script>
</body>

</html>