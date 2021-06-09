<?php
    include "Pert12_LatihanBuatKoneksi.php";

    $judul = $_POST['title'];
    $penulis = $_POST['author'];
    $lead = $_POST['abstraksi'];
    $time = date("d M Y, H:i");
    
    $update = "UPDATE artikel SET judul='$title', penulis='$author', lead='$abstraksi', waktu='$time' WHERE artikelID='$artikelID'";

    $hasil = mysqli_query($connection, $update);

    if($hasil){
        echo "Artikel berhasil diUpdate<br>";
        echo "<a href=\"Pert13_LatihanTampilArtikel.php\">List</a>";
    } else {
        echo "Artikel Gagal diUpdate";
    }
?>