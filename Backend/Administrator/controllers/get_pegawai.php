<?php
// Lakukan koneksi ke database
require_once('../../libraries/config/dbcon.php');

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi ke database gagal: " . $mysqli->connect_error);
}

// Ambil nilai pegawai_id dari input POST
$pegawai_id = $_POST['pegawai_id'];

// Query untuk mendapatkan data dari tabel dt_pegawai berdasarkan pegawai_id yang dipilih
$query = "SELECT id_unit, inp_nip_pegawai, inp_nm_lengkap, inp_besaran_tpp, inp_golongan FROM dt_pegawai WHERE pegawai_id = $pegawai_id";

// Eksekusi query
$result = $mysqli->query($query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Ambil baris hasil dari query
    $row = $result->fetch_assoc();

    // Buat array associative untuk data yang akan dikirimkan kembali
    $response = array(
        'id_unit' => $row['id_unit'],
        'inp_nip_pegawai' => $row['inp_nip_pegawai'],
        'inp_besaran_tpp' => $row['inp_besaran_tpp'],
        'inp_golongan' => $row['inp_golongan'] // Menambahkan inp_golongan ke dalam response
    );

    // Mengembalikan data dalam format JSON
    echo json_encode($response);
} else {
    // Jika query tidak berhasil dieksekusi, kirim pesan kesalahan
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

// Tutup koneksi ke database
$mysqli->close();
?>
