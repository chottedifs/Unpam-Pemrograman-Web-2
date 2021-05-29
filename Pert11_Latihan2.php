<?php
    $dbconnect = mysqli_connect("localhost","root","");
    $dbname = "lat_dbase";
    $check = mysqli_query($dbconnect, "CREATE DATABASE $dbname") or die ("Couldn't Create Database : $dbname");
    if ($check) {
        echo "Database $dbname Berhasil Dibuat";
    }
?>