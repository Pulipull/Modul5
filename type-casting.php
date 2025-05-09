<?php
$angka_pecahan = 15.75;

// Syaiful

echo "Nilai awal (tipe: " . gettype($angka_pecahan) . "): " . $angka_pecahan . "<br>";

// type casting ke integer
$angka_bulat = (int) $angka_pecahan;

echo "Nilai setelah type casting ke integer (tipe: " . gettype($angka_bulat) . "): " . $angka_bulat . "<br>";
?>
