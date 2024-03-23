<?php
require_once('../../libraries/config/dbcon.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        // Ambil dan bersihkan input

        $inp_bulan         = mysqli_real_escape_string($mysqli, $_POST['inp_bulan']);
        $inp_tahun         = mysqli_real_escape_string($mysqli, $_POST['inp_tahun']);
        $id_unit           = mysqli_real_escape_string($mysqli, $_POST['id_unit']);
        $inp_nm_unit       = mysqli_real_escape_string($mysqli, $_POST['inp_nm_unit']);
        $inp_uraian        = mysqli_real_escape_string($mysqli, $_POST['inp_uraian']);
        $inp_rencana_bayar = mysqli_real_escape_string($mysqli, $_POST['inp_rencana_bayar']);
        $inp_status        = mysqli_real_escape_string($mysqli, $_POST['inp_status']);
       
        // Persiapkan kueri parameterized untuk memasukkan data
        $insData = $mysqli->prepare("INSERT INTO dt_pembayaran_tpp (inp_bulan, inp_tahun, id_unit, inp_nm_unit, inp_uraian,inp_rencana_bayar,inp_status) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if (!$insData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $insData->bind_param("sssssss", $inp_bulan, $inp_tahun, $id_unit, $inp_nm_unit, $inp_uraian, $inp_rencana_bayar, $inp_status);

        // Execute prepared statement
        if (!$insData->execute()) {
            throw new Exception("Kesalahan dalam mengeksekusi pernyataan persiapan: " . $insData->error);
        }
        
        $insData->close();

        // Redirect jika operasi berhasil
        echo '<script language="JavaScript">document.location = "../dashboard?page=Pembayaran_TPP";</script>';
        exit(); // Pastikan untuk keluar setelah pengalihan
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>