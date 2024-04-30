<?php
// Contoh fungsi
function writeMsg($nama) {
    echo "selamat datang ". $nama. "<br>";
}
writeMsg("Ahmad"); // pemanggilan fungsi

// fungsi dengan mengirim nilai balik
function tambah($angka1, $angka2) {
    $a = $angka1 + $angka2;
    return $a; // mengirim nilai $a ke pemanggil
}
$hasil = tambah(5, 5);
echo $hasil; 