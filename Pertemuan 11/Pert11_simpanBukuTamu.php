<?php
    include("pert11_koneksiBukuTamu.php");
    $id=$_POST['id'];
    $nama=$_POST['nama_lengkap'];
    $email=$_POST['email'];
    $pesan = $_POST['pesan'];
    $sql="insert into data_tamu(id,nama_lengkap,email,pesan) values ('$id','$nama','$email','$pesan')";
    mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
    header('location:pert11_bukutamu.php');
?>