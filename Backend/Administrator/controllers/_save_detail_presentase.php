<?php
require_once('../../libraries/config/dbcon.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        // Ambil dan bersihkan input
        $inp_nip_pegawai        = mysqli_real_escape_string($mysqli, $_POST['inp_nip_pegawai']);
        $inp_besaran_tpp        = mysqli_real_escape_string($mysqli, $_POST['inp_besaran_tpp']);
        $inp_kehadiran          = mysqli_real_escape_string($mysqli, $_POST['inp_kehadiran']);
        $inp_skp                = mysqli_real_escape_string($mysqli, $_POST['inp_skp']);
        $inp_lap_harian         = mysqli_real_escape_string($mysqli, $_POST['inp_lap_harian']);
        $inp_terlambat_dtg      = mysqli_real_escape_string($mysqli, $_POST['inp_terlambat_dtg']);
        $inp_plg_sebelum_wkt    = mysqli_real_escape_string($mysqli, $_POST['inp_plg_sebelum_wkt']);
        $inp_ket                = mysqli_real_escape_string($mysqli, $_POST['inp_ket']);
        $id_pegawai             = mysqli_real_escape_string($mysqli, $_POST['id_pegawai']);
        $id_unit                = mysqli_real_escape_string($mysqli, $_POST['id_unit']);
        $inp_golongan           = mysqli_real_escape_string($mysqli, $_POST['inp_golongan']);
        $inp_potongan_bln       = mysqli_real_escape_string($mysqli, $_POST['inp_potongan_bln']);
        $inp_hukuman_disiplin   = mysqli_real_escape_string($mysqli, $_POST['inp_hukuman_disiplin']);
       
        // Persiapkan kueri parameterized untuk memasukkan data
        $insData = $mysqli->prepare("INSERT INTO dt_detail_presentase (inp_nip_pegawai, inp_besaran_tpp, inp_kehadiran, inp_skp, 
                            inp_lap_harian, inp_terlambat_dtg, inp_plg_sebelum_wkt, inp_ket, id_pegawai, id_unit, inp_golongan, inp_potongan_bln, inp_hukuman_disiplin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$insData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $insData->bind_param("sssssssssssss", $inp_nip_pegawai, $inp_besaran_tpp, $inp_kehadiran, $inp_skp, 
                            $inp_lap_harian, $inp_terlambat_dtg, $inp_plg_sebelum_wkt, $inp_ket, $id_pegawai, $id_unit, $inp_golongan, $inp_potongan_bln, $inp_hukuman_disiplin);

        // Execute prepared statement
        if (!$insData->execute()) {
            throw new Exception("Kesalahan dalam mengeksekusi pernyataan persiapan: " . $insData->error);
        }
        
        $insData->close();

        // Redirect jika operasi berhasil
        echo '<script language="JavaScript">document.location = "../dashboard?page=Proses_TPP_UnitKerja";</script>';
        exit(); // Pastikan untuk keluar setelah pengalihan
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>