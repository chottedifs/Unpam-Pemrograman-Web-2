<?php
    $con = mysqli_connect("localhost","root","","lat_dbase");
    if ($con->connect_errno) {
        echo "Failed to connect to MYSQL :" . $con->connect_error;
    }

    mysqli_query($con, "DELETE FROM tbl_mhs WHERE last_name = 'gandary'");
?>