<?php

$ibnu = null;

echo"ibnu:";
echo $ibnu;

var_dump(is_null($ibnu));

$farel = [
    "nama" => "farel",
    "umur" => 60,
    "alamat" => [
        "kampung" => "kasomalang",
        "dusun" => [
            "nama_adik" => "agung"
        ]
    ]
    ];

var_dump($farel);

var_dump($farel["alamat"]["dusun"]["nama_adik"]);

