<?php

    try {
        $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charset=utf8", 'root', 'a12345');
        //echo 'veritabanı bağlantısı başarılı';
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>