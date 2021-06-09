<?php
include "Pert12_LatihanBuatKoneksi.php";

$artikelID = $_GET['artikelID'];

//Query satu record artikel dari rabel sesuai nilai $artikelID
$perintah = "SELECT * FROM artikel WHERE artikelID = \"$artikelID\"";
$hasil = mysqli_query($connection, $perintah);
$row = mysqli_fetch_array($hasil);
$time = date("d M Y, H:i");
?>

<h1>Form Berita</h1>
<form name="artikel" method="POST" action="Pert13_LatihanProsesUpdate.php">
    <input type="hidden" name="ID" value="<?= "$row[artikelID]" ?>">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="18%">Judul</td>
            <td width="2%">;</td>
            <td width="80%">
                <input type="text" name="title" value="<?= "$row[judul]" ?>">               
            </td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td>
                <input type="text" name="author" size="50" class="masukkan" value="<?= "$row[penulis]" ?>">
            </td>
        </tr>
        <tr valign="top">
            <td>Lead</td>
            <tr>:</tr>
            <td>
                <textarea name="abstraksi" cols="50" rows="4"><?= "$row[lead]" ?></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="masuk" value="Update" class="tombol">
                <input type="reset" name="hapus" value="Cancel" class="tombol">
            </td>
        </tr>
    </table>
</form>