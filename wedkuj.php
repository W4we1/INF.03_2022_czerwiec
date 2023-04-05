<html>
<head>
    <html lang="pl-PL"></html>
    <meta charset="utf-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
    </head>
    <body>
        <div class="baner">
        Portal dla wędkarzy
        </div>
        <div class="left">
        <h3>Ryby zamieszkujące rzeki</h3>
            <?php
            try
            {
                $pdo = new PDO(`mysql:host=localhost;dbname=wedkowanie`, `root`, `root`);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt=$pdo->query(`SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id=lowisko.Ryby_id WHERE lowisko.rodzaj = 3;);
                echo `<ul`;
                foreach($stmt as $row)
                {
                    echo `<li>`.$row[`ryba.nazwa`].`:`.$row[``]
                }
            }
        </div>
        <div class="left2">
        <h3>Ryby drapieżne naszych wód</h3>
        </div>
        <div class="right">
        <img src="ryba1.jpg">
        </div>
        <div class="footer">
        Strone wykonał: 00000000000OZ
        </div>
    </body>
</html>