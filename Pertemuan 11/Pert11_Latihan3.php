<?php
    $dbconnect = mysqli_connect("localhost","root",""); //Koneksi Database
    mysqli_select_db($dbconnect,"lat_dbase"); ///Mengaktifkan Database

    //Membuat Tabel
    $sql = "CREATE TABLE tbl_mhs
    (
        mhsID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (mhsID),
        first_name varchar(15),
        last_name varchar(15),
        age int
    )";

    mysqli_query($dbconnect,$sql);

    //Input Data
    $input  = mysqli_query($dbconnect,"INSERT INTO tbl_mhs(first_name,last_name,age) VALUE ('Aldi','Husadif','24')");
?>