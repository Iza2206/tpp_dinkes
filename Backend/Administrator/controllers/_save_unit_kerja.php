<?php
require_once('../../libraries/config/dbcon.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        // Ambil dan bersihkan input
        $inp_nm_unit    = mysqli_real_escape_string($mysqli, $_POST['inp_nm_unit']);
        $inp_alamat     = mysqli_real_escape_string($mysqli, $_POST['inp_alamat']);
        $inp_nip        = mysqli_real_escape_string($mysqli, $_POST['inp_nip']);
        $inp_nm_pegawai = mysqli_real_escape_string($mysqli, $_POST['inp_nm_pegawai']);
        $inp_jabatan    = mysqli_real_escape_string($mysqli, $_POST['inp_jabatan']);
       
        // Persiapkan kueri parameterized untuk memasukkan data
        $insData = $mysqli->prepare("INSERT INTO dt_unit_kerja (inp_nm_unit, inp_alamat, inp_nip, inp_nm_pegawai, inp_jabatan) VALUES (?, ?, ?, ?, ?)");
        if (!$insData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $insData->bind_param("sssss", $inp_nm_unit, $inp_alamat, $inp_nip, $inp_nm_pegawai, $inp_jabatan);

        // Execute prepared statement
        if (!$insData->execute()) {
            throw new Exception("Kesalahan dalam mengeksekusi pernyataan persiapan: " . $insData->error);
        }
        
        $insData->close();

        // Redirect jika operasi berhasil
        echo '<script language="JavaScript">document.location = "../dashboard?page=Unit_Kerja";</script>';
        exit(); // Pastikan untuk keluar setelah pengalihan
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>