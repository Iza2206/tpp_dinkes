<?php
require_once('../../libraries/config/dbcon.php');

try {
    if(isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        // Ambil dan bersihkan input
        $id_unit        = mysqli_real_escape_string($mysqli, $_POST['id_unit']);
        $inp_nm_unit    = mysqli_real_escape_string($mysqli, $_POST['inp_nm_unit']);
        $inp_alamat     = mysqli_real_escape_string($mysqli, $_POST['inp_alamat']);
        $inp_nip        = mysqli_real_escape_string($mysqli, $_POST['inp_nip']);
        $inp_nm_pegawai = mysqli_real_escape_string($mysqli, $_POST['inp_nm_pegawai']);
        $inp_jabatan    = mysqli_real_escape_string($mysqli, $_POST['inp_jabatan']);
       
        // Persiapkan kueri parameterized untuk memperbarui data
        $updateData = $mysqli->prepare("UPDATE dt_unit_kerja SET inp_nm_unit=?, inp_alamat=?, inp_nip=?, inp_nm_pegawai=?, inp_jabatan=? WHERE id_unit=?");
        if (!$updateData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $updateData->bind_param("sssssi", $inp_nm_unit, $inp_alamat, $inp_nip, $inp_nm_pegawai, $inp_jabatan, $id_unit);

        $updateData->execute();
        $updateData->close();
        
        // Redirect jika operasi berhasil
        echo '
        <script language="JavaScript">
        document.location = "../dashboard?page=Unit_Kerja";
        </script>
        ';
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>