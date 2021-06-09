<?php
include "Pert12_LatihanBuatKoneksi.php";
?>

<h1>Form Berita</h1>
<form method="POST" action="Pert13_LatihanTambahArtikel.php" name="artikel">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="18%">Judul</td>
            <td width="2%">;</td>
            <td width="80%">
                <input type="text" name="title" size="30" class="masukan">
            </td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>;</td>
            <td>
                <input type="text" name="author" size="30" class="masukan">
            </td>
        </tr>
        <tr>
            <td>Lead</td>
            <td>;</td>
            <td>
                <textarea name="abstraksi" cols="45" rows="4"></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="Submit" value="Add" class="tombol">
                <input type="reset" name="Batal" value="Reset" class="tombol">
            </td>
        </tr>
    </table>
</form>