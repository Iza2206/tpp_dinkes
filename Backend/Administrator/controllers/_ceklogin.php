<?php
session_start();
require_once('../../libraries/config/dbcon.php');

$timeout = 1;
$logout = '../logout.php';
$timeout = $timeout * 60;

// Memeriksa waktu sesi
if(isset($_SESSION['start_session'])) {
    $elapsed_time = time() - $_SESSION['start_session'];
    if($elapsed_time >= $timeout) {
        include('../logout.php'); // Logout jika waktu sesi sudah melebihi batas waktu
    }
}

if(isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    $username_svy = stripslashes($_REQUEST['username_svy']);
    $username_svy = $mysqli->real_escape_string($username_svy);
    $password_input = stripslashes($_POST['passwd_svy']);
    $password_input = $mysqli->real_escape_string($password_input);

    // Ambil password dari basis data berdasarkan username yang dimasukkan
    $result = $mysqli->query("SELECT * FROM dt_pastbcb WHERE username_svy = '$username_svy'") OR die("Gagal 1 " .$mysqli->error);
    $row = $result->fetch_assoc();

    // Verifikasi password yang dimasukkan dengan password yang disimpan dalam basis data menggunakan password_verify()
    if ($row && password_verify($password_input, $row['passwd_svy'])) {
        // Password cocok, lakukan proses login
        $_SESSION['username_svy'] = $row['username_svy'];
        $_SESSION['kd_passtbcb'] = $row['kd_passtbcb'];
        echo '<script language="JavaScript">
        alert("Login berhasil...");
        document.location = "../dashboard?page=Choiice_Health";
        </script>
        ';
    } else {
        // Password salah, tampilkan pesan kesalahan
        echo '<script language="JavaScript">
        alert("Password salah...");
        document.location = "../login";
        </script>
        ';
    }

    // Perbarui waktu sesi
    $_SESSION['start_session'] = time();
}
?>
