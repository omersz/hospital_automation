<?php
    include "header.php";
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hastane otomasyonu</title>
</head>
<body>
    <div class="hesabim_content">
        <div class="label">
            <label>ADI SOYADI</label>
            <input type="text" placeholder="<?php echo $kullanicicek["kullanici_adsoyad"]; ?>">
        </div><br>
        <div class="label">
            <label>TC NO</label>
            <input type="text" placeholder="<?php echo $kullanicicek["kullanici_tc"]; ?>">
        </div><br>

</body>
</html>
