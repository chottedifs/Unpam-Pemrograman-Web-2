<?php
    $i = 0;
    echo "this code will run at least once because i default calue is 0. <br>";
    do {
        echo 'i value is'.$i.',so code block will run.<br>';
        ++$i;
    } while ($i < 10);
?>