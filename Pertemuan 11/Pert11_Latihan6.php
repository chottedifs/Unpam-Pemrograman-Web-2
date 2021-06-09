<?php
    $con = mysqli_connect("localhost","root","","lat_dbase");
    $hasil = mysqli_query($con, "SELECT * FROM tbl_mhs");
    while ($data = mysqli_fetch_array($hasil)){
        echo "$data[first_name] $data[last_name] $data[age] <br>";
    }
?>