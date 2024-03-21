<?php
// Fungsi untuk menghasilkan token acak
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[mt_rand(0, $max)];
    }
    return $randomString;
}

// Menghasilkan token dengan panjang 20 karakter
$acak = generateRandomString(20);

// Menghasilkan token dengan panjang 25 karakter
$acak1 = generateRandomString(25);

// Menghasilkan token angka dengan panjang 6 karakter
$acakangka = generateRandomString(6);

// Menghasilkan token angka dengan panjang 4 karakter
$acakangka4only = generateRandomString(4);

