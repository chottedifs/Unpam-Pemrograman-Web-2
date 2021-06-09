<?php
    include_once("Pert13_CrudConfig.php");

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

    header("Location: Pert13_CrudIndex.php");
?>