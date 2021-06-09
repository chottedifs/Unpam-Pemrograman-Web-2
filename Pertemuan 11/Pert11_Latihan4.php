<?php
    $con = mysqli_connect("localhost","root","","lat_dbase");
    
    
    if ($con -> connect_errno){
        echo "Failed to connect to MYSQL :".$con ->connect_error;
    }
    
    mysqli_query($con,"INSERT INTO tbl_mhs (first_name,last_name,age) VALUE ('Karina','Suwandi','25')");
    mysqli_query($con,"INSERT INTO tbl_mhs (first_name,last_name,age) VALUE ('Glenn','Gandary','30')");

    //Print Auto GenerateID
    echo "New Record :".$con -> insert_id;

    mysqli_close($con);
?>