<?php
require_once('../../libraries/config/dbcon.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Save') {
        // Ambil dan bersihkan input
        $inp_bulan         = $_POST['inp_bulan'];
        $inp_tahun         = $_POST['inp_tahun'];
        $inp_nm_unit       = $_POST['inp_nm_unit'];
        $inp_uraian        = $_POST['inp_uraian'];
        $inp_rencana_bayar = $_POST['inp_rencana_bayar'];
        $inp_status        = $_POST['inp_status'];
        $id_unit           = $_POST['id_unit'];
        
        // Persiapkan kueri parameterized untuk memperbarui data
        $updData = $mysqli->prepare("UPDATE dt_proses_tpp SET inp_bulan=?, inp_tahun=?, inp_nm_unit=?, inp_uraian=?, inp_rencana_bayar=?, inp_status=? WHERE id_unit=?");
        if (!$updData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $updData->bind_param("sssssss", $inp_bulan, $inp_tahun, $inp_nm_unit, $inp_uraian, $inp_rencana_bayar, $inp_status, $id_unit);
        
        // Execute prepared statement
        if (!$updData->execute()) {
            throw new Exception("Kesalahan dalam mengeksekusi pernyataan persiapan: " . $updData->error);
        }
        
        $updData->close();

        // Redirect jika operasi berhasil
        echo '<script language="JavaScript">window.location.href = "../dashboard?page=Proses_TPP_Keuangan";</script>';
        exit(); // Pastikan untuk keluar setelah pengalihan
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>