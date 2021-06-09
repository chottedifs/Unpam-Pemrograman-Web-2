<?php
    session_start();
    if(isset($_SESSION['login'])){
        //Jika sudah login
        //menampilkan isi session
        echo "<h1>Selamat Datang ".$_SESSION['login']."</h1>";
        echo "<h2>Halaman ini hanya bisa dakses jika anda sudah login</h2>";
        echo "<h2>Klik <a href='Pert14_session3.php'>disini (Pert14_session3.php)</a> untuk Logout</h2>";
    }else{
        //session belum ada artinya belum login
        die("Anda Belum Login! anda tidak berhak masuk ke halaman ini. Silahkan login <a href='Pert14_session1.php'> disini</a>");
    }
?>