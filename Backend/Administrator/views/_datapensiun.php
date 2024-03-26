<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<div class="pagetitle">
    <h1>Cek Data Pensiun Pegawai</h1>
</div>

<!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="card-body">
                    <div class="mt-3">
                        <form>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="unitKerja" class="form-label">Unit Kerja</label>
                                    <select class="form-select" id="unitKerja" name="unitKerja">
                                        <option selected disabled>Pilih Unit Kerja</option>
                                        <option value="1">(1) DINAS KESEHATAN</option>
                                        <option value="2">(2) RSU BANGUN PURBA</option>
                                        <option value="3">(3) RSU PANCUR BATU</option>
                                        <option value="4">(4) RSUD H. AMRI TAMBUNAN</option>
                                        <option value="5">(5) UPT. PUSKESMAS ARAS KABU</option>
                                        <option value="6">(6) UPT. PUSKESMAS BANDAR KHALIPAH KECAMATAN PERCUT SEI TUAN</option>
                                        <option value="7">(7) UPT. PUSKESMAS BANDAR BARU KABUPATEN DELI SERDANG</option>
                                        <option value="8">(8) UPT. PUSKESMAS BANGUN PURBA KABUPATEN DELI SERDANG</option>
                                        <option value="9">(9) UPT. PUSKESMAS BATANG KUIS KEC. BATANG KUIS</option>
                                        <option value="10">(10) UPT. PUSKESMAS BIRU - BIRU KECAMATAN BIRU -BIRU</option>
                                        <option value="11">(11) UPT. PUSKESMAS DALU SEPULUH KEC. TANJUNG MORAWA</option>
                                        <option value="12">(12) UPT. PUSKESMAS DELI TUA KECAMATAN DELI TUA</option>
                                        <option value="13">(13) UPT. PUSKESMAS GALANG KEC. GALANG</option>
                                        <option value="14">(14) UPT. PUSKESMAS GUNUNG MERIAH KEC. GUNUNG MERIAH</option>
                                        <option value="15">(15) UPT. PUSKESMAS GUNUNG TINGGI KABUPATEN DELI SERDANG</option>
                                        <option value="16">(16) UPT. PUSKESMAS HAMPARAN PERAK KEC. HAMPARAN PERAK</option>
                                        <option value="17">(17) UPT. PUSKESMAS KARANG ANYAR</option>
                                        <option value="18">(18) UPT. PUSKESMAS KENANGAN KECAMATAN PERCUT SEI TUAN</option>
                                        <option value="19">(19) UPT. PUSKESMAS KOTA DATAR KECAMATAN HAMPARAN PERAK</option>
                                        <option value="20">(20) UPT. PUSKESMAS KUTALIMBARU</option>
                                        <option value="21">(21) UPT. PUSKESMAS LABUHAN DELI KECAMATAN LABUHAN</option>
                                        <option value="22">(22) UPT. PUSKESMAS LUBUK PAKAM KEC. LUBUK PAKAM</option>
                                        <option value="23">(23) UPT. PUSKESMAS MULYOREJO KEC. SUNGGAL</option>
                                        <option value="24">(24) UPT. PUSKESMAS NAMORAMBE KABUPATEN DELI SERDANG</option>
                                        <option value="25">(25) UPT. PUSKESMAS PAGAR JATI KEC. LUBUK PAKAM</option>
                                        <option value="26">(26) UPT. PUSKESMAS PAGAR MERBAU KEC. PAGAR MERBAU</option>
                                        <option value="27">(27) UPT. PUSKESMAS PANCUR BATU KABUPATEN DELI SERDANG</option>
                                        <option value="28">(28) UPT. PUSKESMAS PANTAI LABU KEC. PANTAI LABU</option>
                                        <option value="29">(29) UPT. PUSKESMAS PATUMBAK KECAMATAN PATUMBAK</option>
                                        <option value="30">(30) UPT. PUSKESMAS PEMATANG JOHAR KEC. LABUHAN DELI</option>
                                        <option value="31">(31) UPT. PUSKESMAS PETUMBUKAN KECAMATAN GALANG</option>
                                        <option value="32">(32) UPT. PUSKESMAS SEI SEMAYANG KECAMATAN SUNGGAL</option>
                                        <option value="33">(33) UPT. PUSKESMAS SEI MENCIRIM KABUPATEN DELI SERDANG</option>
                                        <option value="34">(34) UPT. PUSKESMAS SIALANG</option>
                                        <option value="35">(35) UPT. PUSKESMAS SIBOLANGIT KEC. SIBOLANGIT</option>
                                        <option value="36">(36) UPT. PUSKESMAS TALUN KENAS KABUPATEN DELI SERDANG</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3 d-flex align-items-end">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- End Large Modal-->
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <div class="btn-group float-right">
                            <button type="button" onclick="exportToExcel('myTable')" class="btn btn-primary btn-md">Export to Excel</button>
                        </div>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"style="text-align: center;">No</th> 
                                    <th scope="col"style="text-align: center;">Nama</th> 
                                    <th scope="col"style="text-align: center;">NIP</th> 
                                    <th scope="col"style="text-align: center;">Tgl Lahir</th> 
                                    <th scope="col"style="text-align: center;">Usia Pensiun</th>
                                    <th scope="col"style="text-align: center;">Unit Kerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>dr. Asri Ludin Tambunan, M.Ked(PD), Sp.PD</td>
                                    <td>10602090038588</td>
                                    <td>12 Des 1965</td>
                                    <td>58</td>
                                    <td>DINAS KESEHATAN</td>
                                </tr>
                            </tbody>
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
        excel += 'table { border-collapse: collapse; width: 100%; }'; // Menambahkan aturan CSS untuk tabel
        excel += 'td, th { border: 1px solid black; padding: 5px; }'; // Menambahkan aturan CSS untuk sel-sel tabel
        excel += '</style>';

        // Tambahkan judul tabel dan bulan
        excel += '<h3 style="text-align: center;">DAFTAR PEMBAYARAN TAMBAHAN PENGHASILAN PEGAWAI <br>';
        excel += 'DINAS KESEHATAN <br>';
        excel += 'BULAN : JUNI & JULI 2023</h3>';

        excel += '<table>';

        // Loop melalui setiap baris tabel dan tambahkan ke objek Excel
        for (var i = 0; i < rows.length; i++) {
            excel += rows[i].outerHTML; // Menggunakan innerHTML daripada outerHTML agar tidak mengikutsertakan tag <tr> pada judul
        }

        excel += '</table>';

        excel += '</body></html>';

        // Buat blob dari objek Excel
        var blob = new Blob([excel], { type: 'application/vnd.ms-excel' });

        // Buat URL dari blob
        var url = URL.createObjectURL(blob);

        // Buat link untuk download file Excel
        var a = document.createElement('a');
        a.href = url;
        a.download = 'Data Pensiun.xls'; // Nama file Excel yang akan diunduh
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
</script>


