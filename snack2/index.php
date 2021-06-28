<?php
    $name = $_GET["n"];
    $mail = $_GET["m"];
    $age = $_GET["a"];

    if (trim(strlen($name) > 3) && str_contains($mail,".") && str_contains($mail,"@") && is_int(intval($age))) {
        echo "Access granted";
    } else {
        echo "Access forbidden";
    }
?>