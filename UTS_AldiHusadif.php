<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid 19</title>
</head>

<body>
    <h2>FORM DATA PEMATAUAN COVID-19</h2>
    <form action="UTS_db.html" method="POST">
        <label for="wilayah" style="padding-right: 35px;">Nama Wilayah</label>
        <select id="nmWilayah" name="nmWilayah">
            <option value="DKI JAKARTA">DKI Jakarta</option>
            <option value="JAWA BARAT">Jawa Barat</option>
            <option value="BANTEN">Banten</option>
            <option value="JAWA TENGAH">Jawa Tengah</option>
        </select>
        <br>
        <label for="positif" style="padding-right: 43px;">Jumlah Positif</label>
        <input type="text" name="jmlPositif" size="15" style="margin-top: 20px;">
        <br>
        <label for="rawat" style="padding-right: 32px;">Jumlah Dirawat</label>
        <input type="text" name="jmlDirawat" size="15" style="margin-top: 20px;">
        <br>
        <label for="sembuh" style="padding-right: 32px;">Jumlah Sembuh</label>
        <input type="text" name="jmlSembuh" size="15" style="margin-top: 20px;">
        <br>
        <label for="meninggal" style="padding-right: 20px;">Jumlah Meninggal</label>
        <input type="text" name="jmlMeninggal" size="15" style="margin-top: 20px;">
        <br>
        <label for="operator" style="padding-right: 30px;">Nama Operator</label>
        <input type="text" name="nmOperator" size="15" style="margin-top: 20px;">
        <br>
        <label for="nim" style="padding-right: 25px;">NIM Mahasiswa</label>
        <input type="text" name="nimMahasiswa" size="15" style="margin-top: 20px;">
        <br>
        <input type="submit" name="submit" value="Kirim Data"style="background-color: aquamarine; margin-top:30px; margin-left: 80px;">
    </form>
</body>
</html>