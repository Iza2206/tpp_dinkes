<?php
require_once('../../libraries/config/dbcon.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Save') {
        // Ambil dan bersihkan input
        $inp_bpjs_gaji    = mysqli_real_escape_string($mysqli, $_POST['inp_bpjs_gaji']);
        $inp_bpjs_tpp     = mysqli_real_escape_string($mysqli, $_POST['inp_bpjs_tpp']);
        $id_pegawai       = mysqli_real_escape_string($mysqli, $_POST['id_pegawai']);
        $id_unit          = mysqli_real_escape_string($mysqli, $_POST['id_unit']);
       
        // Persiapkan kueri parameterized untuk memperbarui data
        $updData = $mysqli->prepare("UPDATE dt_detail_presentase SET inp_bpjs_gaji = ?, inp_bpjs_tpp = ? WHERE id_pegawai = ? AND id_unit = ?");
        if (!$updData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $updData->bind_param("ssss", $inp_bpjs_gaji, $inp_bpjs_tpp, $id_pegawai, $id_unit);

        // Execute prepared statement
        if (!$updData->execute()) {
            throw new Exception("Kesalahan dalam mengeksekusi pernyataan persiapan: " . $updData->error);
        }
        
        $updData->close();

        // Redirect jika operasi berhasil
        echo '<script language="JavaScript">document.location = "../dashboard?page=Proses_TPP_UnitKerja";</script>';
        exit(); // Pastikan untuk keluar setelah pengalihan
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>
