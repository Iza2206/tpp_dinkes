<?php
require_once('../../libraries/config/dbcon.php');

try {
    if(isset($_POST['submit']) && $_POST['submit'] == 'Submit') {
        // Ambil dan bersihkan input
        $inp_nm_unit    = mysqli_real_escape_string($mysqli, $_POST['inp_nm_unit']);
        $inp_alamat     = mysqli_real_escape_string($mysqli, $_POST['inp_alamat']);
        $inp_nip        = mysqli_real_escape_string($mysqli, $_POST['inp_nip']);
        $inp_nm_pegawai = mysqli_real_escape_string($mysqli, $_POST['inp_nm_pegawai']);
        $inp_jabatan    = mysqli_real_escape_string($mysqli, $_POST['inp_jabatan']);
       
        // Persiapkan kueri parameterized untuk memastikan keamanan dari serangan SQL injection
        $qryData = $mysqli->prepare("SELECT * FROM dt_unit_kerja");
        if (!$qryData) {
            throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
        }
        
        $qryData->execute();
        $result = $qryData->get_result();
        $cekBaris = $result->num_rows;

        if($cekBaris > 0) {
            echo '
            <script language="JavaScript">
            alert("Data sudah ada dalam database.");
            document.location = "../dashboard?page=Unit_Kerja";
            </script>
            ';
        }
        else {
            // Persiapkan kueri parameterized untuk memasukkan data
            $insData = $mysqli->prepare("INSERT INTO dt_unit_kerja (inp_nm_unit, inp_alamat, inp_nip, inp_nm_pegawai, inp_jabatan) VALUES (?, ?, ?, ?, ?)");
            if (!$insData) {
                throw new Exception("Kesalahan dalam menyiapkan kueri: " . $mysqli->error);
            }
            
            // Bind parameter dengan referensi
            $insData->bind_param("sssss", $inp_nm_unit, $inp_alamat, $inp_nip, $inp_nm_pegawai, $inp_jabatan);

            $insData->execute();
            $insData->close();
        }

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
