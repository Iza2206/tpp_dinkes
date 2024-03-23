<?php
require_once('../../libraries/config/dbcon.php');

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi ke database gagal: " . $mysqli->connect_error);
}

// Ambil nilai id_unit dari input POST
$id_unit = isset($_POST['id_unit']) ? $_POST['id_unit'] : '';

// Pastikan nilai id_unit valid sebelum melakukan query
if (!empty($id_unit)) {
    // Query untuk mendapatkan data dari tabel dt_proses_tpp_unitkerja berdasarkan id_unit yang dipilih
    $query = "SELECT id_unit, inp_bulan, inp_tahun, inp_nm_unit, inp_uraian FROM dt_proses_tpp_unitkerja WHERE id_unit = $id_unit";

    // Eksekusi query
    $result = $mysqli->query($query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Ambil baris hasil dari query
        $row = $result->fetch_assoc();

        // Buat array associative untuk data yang akan dikirimkan kembali
        $response = array(
            'id_unit' => $row['id_unit'],
            'inp_bulan' => $row['inp_bulan'],
            'inp_tahun' => $row['inp_tahun'],
            'inp_nm_unit' => $row['inp_nm_unit'],
            'inp_uraian' => $row['inp_uraian']
        );

        // Mengembalikan data dalam format JSON
        echo json_encode($response);
    } else {
        // Jika query tidak berhasil dieksekusi, kirim pesan kesalahan
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
} else {
    echo "Pegawai ID tidak valid.";
}

// Tutup koneksi ke database
$mysqli->close();
?>
