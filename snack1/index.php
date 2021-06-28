<?php
    $games = [
        [
            "homeN" => "Milano",
            "homeP" => "55",
            "awayN" => "Cantù",
            "awayP" => "60"
        ],
        [
            "homeN" => "Virtus",
            "homeP" => "100",
            "awayN" => "Fortitudo",
            "awayP" => "70"
        ],
        [
            "homeN" => "Sassari",
            "homeP" => "87",
            "awayN" => "Venezia",
            "awayP" => "88"
        ]

    ];
    for ($i=0; $i<count($games); $i++) {
        echo $games[$i]["homeN"] . " - " . $games[$i]["awayN"] . " | " . $games[$i]["homeP"] . " - " . $games[$i]["awayP"] . "<br />";
    }
?>