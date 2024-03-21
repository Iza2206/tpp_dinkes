<?php
require_once('../../libraries/config/dbcon.php');

try {
    if(isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        // Ambil dan bersihkan input
        $pegawai_id       = mysqli_real_escape_string($mysqli, $_POST['pegawai_id']);
        $inp_nip_pegawai  = mysqli_real_escape_string($mysqli, $_POST['inp_nip_pegawai']);
        $inp_nm_lengkap   = mysqli_real_escape_string($mysqli, $_POST['inp_nm_lengkap']);
        $inp_tgl_lahir    = mysqli_real_escape_string($mysqli, $_POST['inp_tgl_lahir']);
        $inp_alamat       = mysqli_real_escape_string($mysqli, $_POST['inp_alamat']);
        $inp_jabatan      = mysqli_real_escape_string($mysqli, $_POST['inp_jabatan']);
        $inp_npwp         = mysqli_real_escape_string($mysqli, $_POST['inp_npwp']);
        $inp_nm_unit      = mysqli_real_escape_string($mysqli, $_POST['inp_nm_unit']);
        $inp_golongan     = mysqli_real_escape_string($mysqli, $_POST['inp_golongan']);
        $inp_besaran_tpp  = mysqli_real_escape_string($mysqli, $_POST['inp_besaran_tpp']);
        $inp_no_rekening  = mysqli_real_escape_string($mysqli, $_POST['inp_no_rekening']);
        $inp_status_peg   = mysqli_real_escape_string($mysqli, $_POST['inp_status_peg']);
        $inp_umur_pensiun = mysqli_real_escape_string($mysqli, $_POST['inp_umur_pensiun']);
        $inp_saskerja     = mysqli_real_escape_string($mysqli, $_POST['inp_saskerja']);
        $inp_bpjs_gaji    = mysqli_real_escape_string($mysqli, $_POST['inp_bpjs_gaji']);
        $inp_kls_jabatan  = mysqli_real_escape_string($mysqli, $_POST['inp_kls_jabatan']);
       
        // Persiapkan kueri parameterized untuk memperbarui data
        $updateData = $mysqli->prepare("UPDATE dt_pegawai SET inp_nip_pegawai=?, inp_nm_lengkap=?, inp_tgl_lahir=?, inp_alamat=?, inp_jabatan=? , inp_npwp=? , inp_nm_unit=?
                                        , inp_golongan=? , inp_besaran_tpp=? , inp_no_rekening=? , inp_status_peg=? , inp_umur_pensiun=? , inp_saskerja=? , inp_bpjs_gaji=? , inp_kls_jabatan=? 
                                        WHERE pegawai_id=?");
        if (!$updateData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        // Bind parameter dengan referensi
        $updateData->bind_param("sssssssssssssssi", $inp_nip_pegawai, $inp_nm_lengkap, $inp_tgl_lahir, $inp_alamat, $inp_jabatan, $inp_npwp, $inp_nm_unit, $inp_golongan, 
                                $inp_besaran_tpp, $inp_no_rekening, $inp_status_peg, $inp_umur_pensiun, $inp_saskerja, $inp_bpjs_gaji, $inp_kls_jabatan, $pegawai_id);

        $updateData->execute();
        $updateData->close();
        
        // Redirect jika operasi berhasil
        echo '
        <script language="JavaScript">
        document.location = "../dashboard?page=Data_Pegawai";
        </script>
        ';
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>