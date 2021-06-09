<?php
    include "Pert12_LatihanBuatKoneksi.php";

    $perintah = "SELECT * FROM artikel ORDER BY artikelID Desc";
    $hasil = mysqli_query($connection, $perintah);

    echo ("
        <h2>List Artikel</h2>
        <br><ul>
    ");

    while ($row = mysqli_fetch_array($hasil)){
        echo ("
            <li>
                $row[1]&nbsp; $row[2]&nbsp; $row[waktu]&nbsp;
                <a href=\"Pert13_LatihanEditArtikel.php?artikelID=$row[0]\">Edit</a>&nbsp;
                <a href=\"Pert13_LatihanDeleteArtikel.php?artikelID=$row[0]\">Hapus</a>&nbsp;
            </li>
            <br>
        ");
    }

    echo ("</table>");
    echo "<br><a href=\"Pert13_LatihanFormIsianArtikel.php\">Tambah</a>";
    echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
?>