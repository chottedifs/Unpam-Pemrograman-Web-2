<?php
    $con = mysqli_connect("localhost","root","","lat_dbase");
    $view = mysqli_query($con,"SELECT * FROM tbl_mhs");
    while ($data = mysqli_fetch_row($view)){
        echo "$data[0],$data[1],$data[2],$data[3] <br>";
    }
?>