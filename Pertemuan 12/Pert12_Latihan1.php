<?php
    $con = mysqli_connect("localhost","root","","lat_dbase");

    if ($con->connect_errno) {
        echo "Failed to connect to MYSQL :" . $con->connect_error;
    }

    mysqli_query($con, "UPDATE tbl_mhs SET age = '20' WHERE first_name = 'Aldi' AND last_name = 'Husadif'");

    mysqli_close($con);
?>