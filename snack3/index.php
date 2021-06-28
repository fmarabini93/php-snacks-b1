<?php
    $numbers = [];
    while (count($numbers)<15) {
        $newNumber = rand(1,100);
        if (!in_array($newNumber,$numbers)) {
            $numbers[] = $newNumber;
        }
    }
    for ($i=0; $i<15; $i++) {
        echo $numbers[$i] . "<br />";
    }
?>