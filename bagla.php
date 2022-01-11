<?php


try {
    $db = new PDO( "mysql:host=localhost;
                        dbname=hastane_otomasyon;
                        charste= utf8",'root','xenon222');
   // echo "Veri tabanı baglantısı basarılı";
}
catch (Exception $e) {
    echo $e -> getMessage();
}

?>