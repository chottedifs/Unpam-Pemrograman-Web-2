<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "artikel_db";

    //Lakukan Koneksi dengan MYSQL
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$connection){
        echo "Tidak dapat terhubung dengan database";
        exit;
    }

    //Pilih Database
    $pilih_db = mysqli_select_db($connection, $dbname);
    if(!$pilih_db){
        echo "Tidak Dapat memilih database";
        exit;
    }

?>