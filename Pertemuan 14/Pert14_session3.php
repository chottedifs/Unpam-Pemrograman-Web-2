<?php
    session_start();
    if(isset($_SESSION['login'])){
        unset($_SESSION);
        session_destroy();

        echo "<h1>Anda Berhasil Logout</h1>";
        echo "<h2>Klik <a href='Pert14_session1.php'>disini</a> Untuk Login kembali</h2>";
        echo "<h2>Anda sekarang tdak bisa masuk ke halaman <a href='Pert14_session2.php'> Pert14_session2.php </a>Lagi</h2>";
    }
?>