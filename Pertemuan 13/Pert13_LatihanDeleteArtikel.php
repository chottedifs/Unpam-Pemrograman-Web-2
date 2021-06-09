<?php 
    include "Pert12_LatihanBuatKoneksi.php";
    
    $artikelID = $_GET['artikelID'];

    $perintah = "DELETE FROM artikel WHERE artikelID = \"$artikelID\"";
    $hasil = mysqli_query($connection, $perintah);

    if($hasil){
        echo "Artikel Berhasil dihapus";
        echo "<a href=\"Pert13_LatihanEditArtikel.php\">Back</a>";
    } else {
        echo "Komentar Gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke Database SQL";
    }
?>