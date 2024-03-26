<?php
if(empty($_GET['page'])) {
    include('views/_depan.php');
}
elseif($_GET['page'] == 'logout') {
    include('logout.php');
}

// Master Data
// 1. Seting Aplikasi
elseif($_GET['page'] == 'Set_App') {
    include('views/_setting_aplikasi.php');
}
// 2. Unit Kerja
elseif($_GET['page'] == 'Unit_Kerja') {
    include('views/_UnitKerja.php');
}
// 3. Data Pegawai
elseif($_GET['page'] == 'Data_Pegawai') {
    include('views/_datapegawai.php');
}

// Entry Data 
// a. Data TPPP
// 1. Proses TPP dari Unit Kerja
elseif($_GET['page'] == 'Proses_TPP_UnitKerja') {
    include('views/_proses_TPP_unitkerja.php');
}
elseif($_GET['page'] == 'Detail_TPP') {
    include('views/_detailTPP.php');
}
// 2. Proses TPP dari Keuangan
elseif($_GET['page'] == 'Proses_TPP_Keuangan') {
    include('views/_proses_TPP_keuangan.php');
}
// b. Pembayaran TPP
elseif($_GET['page'] == 'Pembayaran_TPP') {
    include('views/_pembayaran_TPP.php');
}

// Laporan-Laporan 
// 1. Rekapitulasi Persentase Penilaian (Lampiran V)
elseif($_GET['page'] == 'Persentase_Penilaian') {
    include('views/_persentase_penilaian.php');
}
// pdf
elseif($_GET['page'] == 'Print_all') {
    include('views/_print_all.php');
}
// 2. Rekapitulasi Pembayaran (Lampiran VI)
elseif($_GET['page'] == 'Report_Pembayaran') {
    include('views/_reportPembayaran.php');
}
// pdf_pembayaran
elseif($_GET['page'] == 'Print_all_pembayaran') {
    include('views/_print_all_pembayaran.php');
}
// 3. Laporan Pembayaran Ke Bank
elseif($_GET['page'] == 'Laporan_Pembayaran_Bank') {
    include('views/_laporanPembayaranBank.php');
}
// 4. Laporan Pengajuan SPD
elseif($_GET['page'] == 'Laporan_SPD') {
    include('views/_laporanSPD.php');
}
// 5. Cek Data Pensiun
elseif($_GET['page'] == 'Data_Pensiun') {
    include('views/_datapensiun.php');
}
// 6. Perbandingan Data TPP Puskesmas
elseif($_GET['page'] == 'Perbandingan_TPP') {
    include('views/_perbandinganTPP.php');
}
// 7. Bukti Potong Pajak 1
elseif($_GET['page'] == 'Potong_Pajak_1') {
    include('views/_perbandinganTPP.php');
}