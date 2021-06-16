<?php
    $value = 'Aldi';
    $value2 = 'Aldi Husadif';
    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600); 

    echo "<h1>Ini halaman pengesetan cookie</h1>";
    echo "<h2>Klik <a href='Pert15_cookies2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>