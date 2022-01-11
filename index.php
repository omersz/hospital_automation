<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Automation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Hastane Otomasyonu</h2>
    </header>

    <div class="tableOuter">
        <h1>Giriş yap</h1>
        <form action="islem.php" method="post">

            <div class="user">
                <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input type="password" name="kullanici_password" placeholder="Şifre">
            </div>
            <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
        </form>
        <a href="kullanici.php"><button type="submit" class="sub" id="üye">Üye Ol</button></a>
    </div>


</body>
</html>