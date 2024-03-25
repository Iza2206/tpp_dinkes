<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<div class="pagetitle">
    <h1>Rekepitulasi Persentase Penilaian Aspek Perilaku dan Prestasi Kerja (Lampiran V)</h1>
</div>

<!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="mt-3">
                        <form action="" method="POST">
                            <div class="d-flex align-items-center mb-3">
                                <h5 style="margin-right: 10px; margin-bottom: 0;">Unit Kerja</h5>
                                <select class="form-select mb-3 me-2" name="id_unit" style="width: 200px;">
                                <option selected disabled>-- Pilih Unit Kerja --</option>
                                    <?php
                                        $result = $mysqli->query("SELECT id_unit, inp_nm_unit FROM dt_proses_tpp_unitkerja");
                                        while($row = $result->fetch_assoc()) {
                                            echo "<option value='".$row['id_unit']."'>".$row['inp_nm_unit']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <h5 style="margin-right: 40px; margin-bottom: 0;">Bulan</h5>
                                <select class="form-select" name="inp_bulan" style="width: 200px; margin-bottom: 0;">
                                <option selected disabled>-- Pilih Bulan --</option>
                                <?php
                                    $result = $mysqli->query("SELECT DISTINCT inp_bulan FROM dt_proses_tpp_unitkerja");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['inp_bulan'] . "'>" . $row['inp_bulan'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <h5 style="margin-right: 40px; margin-bottom: 0;">Tahun</h5>
                                <select class="form-select" name="inp_tahun" style="width: 200px; margin-bottom: 0;">
                                    <option selected disabled>-- Pilih Tahun --</option>
                                    <?php
                                    $result = $mysqli->query("SELECT DISTINCT inp_tahun FROM dt_proses_tpp_unitkerja");
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['inp_tahun'] . "'>" . $row['inp_tahun'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- End Large Modal-->
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <div class="btn-group float-right">
                            <button type="button" onclick="exportToExcel('myTable')" class="btn btn-primary btn-md">Export to Excel</button>
                            <a href="../Administrator/dashboard_blank.php?page=Print_all" target="_blank" class="btn btn-success btn-md" style="margin-left: 10px;">Export PDF</a>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                            // Ambil nilai dari formulir
                            $inp_bulan  = $_POST['inp_bulan'];
                            $inp_tahun  = $_POST['inp_tahun'];
                            $id_unit    = $_POST['id_unit'];

                            $result = $mysqli->query("SELECT * FROM dt_detail_presentase INNER JOIN dt_pegawai ON dt_detail_presentase.id_pegawai = dt_pegawai.pegawai_id
                                        INNER JOIN dt_proses_tpp_unitkerja ON dt_pegawai.id_unit = dt_proses_tpp_unitkerja.id_unit
                                        WHERE dt_pegawai.id_unit = '$id_unit'
                                        AND dt_proses_tpp_unitkerja.inp_tahun = '$inp_tahun'
                                        AND dt_proses_tpp_unitkerja.inp_bulan = '$inp_bulan'");
                        ?>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!-- Column headers -->
                                    <th scope="col" rowspan="2" style="text-align: center;">No</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Nama/NIP</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Gol</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Jabatan/NPWP</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Kelas Jabatan</th> 
                                    <th scope="col" colspan="6" style="text-align: center;">Jumlah TPP</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Jumlah TPP Kotor</th> 
                                    <th scope="col" colspan="2" style="text-align: center;">Potongan</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Jumlah Potongan</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Jumlah Bersih</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">PPH Pasal 21</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Jumlah TPP yang Diterima</th> 
                                    <th scope="col" rowspan="2" style="text-align: center;">Tanda Tangan</th> 
                                </tr>
                            
                                <tr>
                                    <!-- sub Kompenen perhitungan -->
                                    <th scope="col" style="text-align: center;">Besaran TPP(Rp)</th>
                                    <th scope="col" style="text-align: center;">Total Persentase Penilaian (%)</th>
                                    <th scope="col" style="text-align: center;">Jumlah TPP</th>
                                    <th scope="col" style="text-align: center;">Pot. Bulan Lalu</th>
                                    <th scope="col" style="text-align: center;">Pot Hukuman Disiplin</th>
                                    <th scope="col" style="text-align: center;">Subsidi Pemkab BPJS 4%</th>
                                    <th scope="col" style="text-align: center;">Subsidi BPJS 4%</th>
                                    <th scope="col" style="text-align: center;">Pot Kewajiban BPJS 1%</th>
                                </tr>
                                <tr>
                                    <!-- Column headers -->
                                    <th scope="col"style="text-align: center;">1</th> 
                                    <th scope="col"style="text-align: center;">2</th> 
                                    <th scope="col"style="text-align: center;">3</th> 
                                    <th scope="col"style="text-align: center;">4</th> 
                                    <th scope="col"style="text-align: center;">5</th> 
                                    <th scope="col"style="text-align: center;">6</th> 
                                    <th scope="col"style="text-align: center;">7</th> 
                                    <th scope="col"style="text-align: center;">8</th> 
                                    <th scope="col"style="text-align: center;">9</th> 
                                    <th scope="col"style="text-align: center;">10</th> 
                                    <th scope="col"style="text-align: center;">11</th> 
                                    <th scope="col"style="text-align: center;">12=(8+11)-(9+10)</th> 
                                    <th scope="col"style="text-align: center;">13</th> 
                                    <th scope="col"style="text-align: center;">14</th> 
                                    <th scope="col"style="text-align: center;">15=(13+14)</th> 
                                    <th scope="col"style="text-align: center;">16=(12-15)</th> 
                                    <th scope="col"style="text-align: center;">17</th> 
                                    <th scope="col"style="text-align: center;">18=(16-17)</th> 
                                    <th scope="col"style="text-align: center;">19</th> 
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                while($Qrylaporan= $result->fetch_array()) {
                            ?>
                            <tbody>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $Qrylaporan['inp_nm_lengkap']; ?> / <?= $Qrylaporan['inp_nip_pegawai']; ?></td>
                                <td><?= $Qrylaporan['inp_golongan']; ?></td>
                                <td><?= $Qrylaporan['inp_jabatan']; ?> / <?= $Qrylaporan['inp_npwp']; ?></td>
                                <td><?= $Qrylaporan['inp_kls_jabatan']; ?></td>
                                <td><?= $Qrylaporan['inp_besaran_tpp']; ?></td>
                                <?php
                                        $inp_kehadiran = intval($Qrylaporan['inp_kehadiran']);
                                        $inp_skp = intval($Qrylaporan['inp_skp']);
                                        $inp_lap_harian = intval($Qrylaporan['inp_lap_harian']);
                                        $inp_terlambat_dtg = intval($Qrylaporan['inp_terlambat_dtg']);
                                        $inp_plg_sebelum_wkt = intval($Qrylaporan['inp_plg_sebelum_wkt']);

                                        // Hitung total
                                        $total = $inp_kehadiran + $inp_skp + $inp_lap_harian + $inp_terlambat_dtg + $inp_plg_sebelum_wkt;
                                    ?>
                                <td><?= $total; ?></td>
                                <td>jumlah tpp</td>
                                <td><?= $Qrylaporan['inp_potongan_bln']; ?></td>
                                <td><?= $Qrylaporan['inp_hukuman_disiplin']; ?></td>
                                <td>Subsidi Pemkab BPJS 4%</td>
                                <td>Subsidi BPJS 4%</td>
                                <td>Pot Kewajiban BPJS 1%</td>
                                <td>00.00</td>
                                <td>00.00</td>
                                <td>100%</td>
                                <td>00.00</td>
                                <td>60.00</td>
                                <td>20.00</td>
                                <td>20.00</td>
                                </tr>
                            </tbody>
                            <?php } } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function exportToExcel(tableId) {
        // Ambil elemen tabel berdasarkan ID
        var table = document.getElementById(tableId);
        var rows = table.querySelectorAll('tr');
      
        // Buat objek Excel dengan format yang sesuai
        var excel = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">';
        excel += '<head><meta charset="UTF-8"></head><body>';

        excel += '<style>';
        excel += 'h5 { margin: 0; padding: 0; font-weight: normal;}'; // Mengatur margin dan padding menjadi 0 untuk tag h5
        excel += 'table { border-collapse: collapse; width: 100%; }'; // Menambahkan aturan CSS untuk tabel
        excel += 'td, th { border: 1px solid black; padding: 5px; }'; // Menambahkan aturan CSS untuk sel-sel tabel
        excel += '</style>';

        excel += '<h5>LAMPIRAN VI</h5>';
        excel += '<h5>PERATURAN BUPATI DELI SERDANG</h5>';
        excel += '<h5>NOMOR 04 TAHUN 2019</h5>';
        excel += '<h5>TENTANG</h5>';
        excel += '<h5>TAMBAHAN PENGHASILAN PEGAWAI NEGERI SIPIL DAERAH</h5>';
        excel += '<h5>KABUPATEN DELI SERDANG</h5>';
        // Tambahkan judul tabel dan bulan
        excel += '<h3 style="text-align: center;">REKAPITULASI PERSENTASE PENILAIAN ASPEK PERILAKU KERJA DAN ASPEK PRESTASI KERJA PNSD<br>';
        excel += 'DINAS KESEHATAN KABUPATEN DELI SERDANG<br>';
        excel += 'DINAS KESEHATAN</h3>';

        excel += '<h5><b>BULAN: JANUARI 2023</b></h5>';

        excel += '<table>';
        for (var i = 0; i < rows.length; i++) {
            excel += rows[i].outerHTML;
        }
        excel += '</table>';


        excel += '<table style="border-collapse: collapse; font-family: Arial Narrow; font-size: 8pt; width: 100%;">';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-
        excel += '<td colspan="3" style="border: none;">TELAH DIVERIFIKASI OLEH</td>'; // Kolom 4-12, Baris 1
        excel += '<td colspan="4" style="border: none;"></td>'; // Kolom 4-12, Baris 1
        excel += '<td colspan="3" style="border: none;">Lubuk Pakam,</td>'; // Kolom 4-12, Baris 1
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;">Tanggal</td>'; // Kolom 4-12, Baris 2
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;">Ka. Sub. Bag. Hukum, Kepegawaian dan Umum</td>'; // Kolom 4-12, Baris 5
        excel += '<td colspan="4" style="border: none;"></td>'; // Kolom 4-12, Baris 1
        excel += '<td colspan="3" style="border: none;">Sekretaris Dinas Kesehatan</td>'; // Kolom 4-12, Baris 1
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;">Dinas Kesehatan Kabupaten Deli Serdang</td>'; // Kolom 4-12, Baris 6
        excel += '<td colspan="4" style="border: none;"></td>'; // Kolom 4-12, Baris 1
        excel += '<td colspan="3" style="border: none;">Dinas Kesehatan Kabupaten Deli Serdang</td>'; // Kolom 4-12, Baris 1
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;"><u>Sri Rezeki</u></td>'; // Kolom 4-12, Baris 10
        excel += '<td colspan="4" style="border: none;"></td>'; // Kolom 4-12, Baris 1
        excel += '<td colspan="3" style="border: none;"><u>dr. Tetty Rossanti Keliath</u></td>'; // Kolom 4-12, Baris 1
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;">NIP. 19710712 199303 1009</td>'; // Kolom 4-12, Baris 11
        excel += '<td colspan="4" style="border: none;"></td>'; // Kolom 4-12, Baris 1
        excel += '<td colspan="3" style="border: none;">NIP. 19770418 200312 2 009</td>'; // Kolom 4-12, Baris 1
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;">Pejabat di Bidang Pemberhentian dan Pensiun BKD</td>'; // Kolom 4-12, Baris 14
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="12" style="border: none;">NIP.</td>'; // Kolom 1-12, Baris 18
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="3" style="border: none;">Pejabat di Bidang Penilaian Kinerja Aparatur dan Promosi BKD</td>'; // Kolom 4-12, Baris 19
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="12" style="border: none;"></td>'; // Kolom 1, Baris 1-19 kosong
        excel += '</tr>';
        excel += '<tr>';
        excel += '<td colspan="1" style="border: none;"></td>'; // Kolom 1-3, Baris 1-19 kosong
        excel += '<td colspan="12" style="border: none;">NIP.</td>'; // Kolom 1-12, Baris 23
        excel += '</tr>';
        excel += '</table>';

        
        // Tutup tag HTML
        excel += '</body></html>';

        // Buat blob dari objek Excel
        var blob = new Blob([excel], { type: 'application/vnd.ms-excel' });
        
        // Buat URL dari blob
        var url = URL.createObjectURL(blob);
        
        // Buat link untuk download file Excel
        var a = document.createElement('a');
        a.href = url;
        a.download = 'exported_data.xls'; // Nama file Excel yang akan diunduh
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
    function exportToPdf() {
    console.log('Fungsi exportToPdf() dipanggil.');
    var doc = new jsPDF();
    doc.text('Ini adalah konten PDF yang dibuat secara dinamis.', 10, 10);
    doc.save('nama_file.pdf');
}

</script>
<!-- <script>

</script> -->
