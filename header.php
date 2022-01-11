<?php
    ob_start();
    session_start();
    include "bagla.php";

    $kullanicisor =$db->prepare('SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc');
    $kullanicisor->execute([
            'kullanici_tc' => $_SESSION['userkullanici_tc']
    ]);
    $say = $kullanicisor->rowCount();
    $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

    if($say== 0){
        header("location:index.php?izinsiz");
        exit;
    }
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hastane Otomasyonu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ust_bar">
        <a href="anasayfa.php"><h1>Hastane Otomasyonu</h1></a>    
            <div class="menu">
                <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
                <a href="randevu.php"></h5>Randevu Bilgileri</h5></a>
            </div>
    </div>
    <a href="logout.php">
        <div class="cikis">
            Çıkış yap
        </div>
    </a>


</body>
</html>
