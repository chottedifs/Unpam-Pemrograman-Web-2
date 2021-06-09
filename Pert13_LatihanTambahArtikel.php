<?php
    include "Pert12_LatihanBuatKoneksi.php";

    $judul = $_POST['title'];
    $penulis = $_POST['author'];
    $lead = $_POST['abstraksi'];
    $time = date("d M Y, H:i");

    $lead = str_replace("\r\n", "<br>", $lead);

    $query = 
        "INSERT INTO artikel (
            judul, 
            penulis, 
            lead, 
            waktu
          ) VALUES (
            '$judul',
            '$penulis',
            '$lead',
            '$time'
          )";
    
    $result = mysqli_query($connection,$query);

    if ($result){
        echo "<h3 align=center>Proses Penambahan Artikel Berhasil</h3>";
        echo "<a href=\"Pert13_LatihanTampilArtikel.php\">List<a>";
    } else {
        echo "<h2 align=center>Proses Penambahan Artikel Tidak Berhasil</h2>";
    }

?>