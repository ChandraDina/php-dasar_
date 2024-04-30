<?php
// Gaji pokok yang diterima Obi sebesar Rp. 3.250.000,-
// Tunjangan jabatan sebesar Rp. 1.200.000,-
// Pajaknya penghasilan sebesar 10% dihitung dari gaji kotor
// Gaji kotor = gaji pokok + tunjangan

$gaji_pokok = 3250000;
$tunjangan = 1200000;
$gaji_kotor = $gaji_pokok + $tunjangan;
$pajak = $gaji_kotor * 0.1;
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji bersih yang diterima Obi setiap bulannya: Rp. ". $gaji_bersih;