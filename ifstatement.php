<?php

$nilai = 78;
$absen = 89;

if ($nilai >= 60 && $absen >=  60) {
    echo "kamu telah lulus";
} else if ($nilai >=50 && $absen >=55) {
    echo"kamu aman";
} else {
    echo"kamu tidak lulus";
}

