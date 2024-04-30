<?php
// Ani akan mengambil uang tabungan sejumlah Rp. 1.387.500,-
// Uang pecahan yang berlaku adalah Rp. 100.000,-; Rp.50.000,-; Rp. 20.000,-; Rp. 10.000,-; Rp. 5.000,-; Rp. 2.000,- dan Rp. 500,-.

$uang_tabungan = 1387500;

$pecahan = array(
    100000 => 0,
    50000 => 0,
    20000 => 0,
    10000 => 0,
    5000 => 0,
    2000 => 0,
    500 => 0
);

while ($uang_tabungan > 0) {
    foreach ($pecahan as $nilai => &$jumlah) {
        if ($uang_tabungan >= $nilai) {
            $jumlah++;
            $uang_tabungan -= $nilai;
        }
    }
}

echo "Banyaknya masing-masing uang pecahan yang diperoleh Ani dari Bank:<br>";
foreach ($pecahan as $nilai => $jumlah) {
    echo "$nilai: $jumlah<br>";
}