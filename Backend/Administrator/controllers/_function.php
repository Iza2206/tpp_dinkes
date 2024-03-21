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
// 1. Proses TPP dari Unit Kerja
elseif($_GET['page'] == 'Proses_TPP_UnitKerja') {
    include('views/_proses_TPP_unitkerja.php');
}
elseif($_GET['page'] == 'Detail_TPP') {
    include('views/_detailTPP.php');
}