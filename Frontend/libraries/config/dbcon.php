<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tpcb');
ini_set('date.timezone', 'Asia/Jakarta');

$year = date('Y');
$version = '20022024-1.0.1';
$main = 'dashboard';

//for Native
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false) {
    die('Koneksi database gagal : ' .mysqli_connect_error());
}