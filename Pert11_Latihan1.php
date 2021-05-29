<?php
    //Hostname atau IP Server
    $servername = 'localhost';

    //Username dan Password
    $dbusername = 'root';
    $dbpassword = '';
    $link = mysqli_connect ("$servername","$dbusername","$dbpassword") or die ("Not able to connect to server");
    if($link)
    {
        echo "Ok .. Koneksi Berhasil";
    }
?>