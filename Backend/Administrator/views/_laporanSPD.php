<div class="pagetitle">
    <h1>Rekap Pengajuan SPD</h1>
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
                                    <label for="rencanaBayar" class="form-label">Rencana Bayar (YYYY-MM-DD)</label>
                                    <input class="form-control" type="date" id="rencanaBayar" name="rencanaBayar">
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
                                <!-- Ambil Versi 2 aja di urut berdasarkan bulan -->
                                <!-- Rencana bayar 2 bulan dan 1 bulan untuk headernya sama -->
                                <tr>
                                    <th scope="col"style="text-align: center;">No</th> 
                                    <th scope="col"style="text-align: center;">Nama Puskesmas</th> 
                                    <th scope="col"style="text-align: center;">Bulan</th> 
                                    <th scope="col"style="text-align: center;">Jumlah TPP</th> 
                                    <th scope="col"style="text-align: center;">BPJS 4%</th>
                                    <th scope="col"style="text-align: center;">Jumlah Bruto</th> 
                                    <th scope="col"style="text-align: center;">Pajak</th> 
                                    <th scope="col"style="text-align: center;">BPJS 1%</th> 
                                    <th scope="col"style="text-align: center;">Jumlah Bersih</th>  
                                </tr>
                            </thead>
                            <!-- Rencana bayar 1 dan 2 bulan sama  -->
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>DINAS KESEHATAN</td>
                                    <td>Januari</td>
                                    <td>343.200.000	</td>
                                    <td>12.857.972</td>
                                    <td>343.200.000</td>
                                    <td>25.041.626</td>
                                    <td>3.214.493		</td>
                                    <td>314.943.881</td>
                                </tr>
                            </tbody>
                            <!-- Rencana bayar 1 bulan  -->
                            <tfoot>
                                <tr>
                                    <td colspan="3">Jumlah Januari</td>
                                    <td>2.384.204.880</td>
                                    <td>95.098.494</td>
                                    <td>2.479.303.374</td>
                                    <td>145.880.504</td>
                                    <td>23.774.624</td>
                                    <td>2.214.549.752</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Jumlah Total</td>
                                    <td>2.384.204.880</td>
                                    <td>95.098.494</td>
                                    <td>2.479.303.374</td>
                                    <td>145.880.504</td>
                                    <td>23.774.624</td>
                                    <td>2.214.549.752</td>
                                </tr>
                            </tfoot>
                            <!-- Rencana bayar 2 bulan. masuk lagi tbody baru tfoot lagi  -->
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

        // Tambahkan judul tabel dan bulan;
        excel += '<h5><b>BULAN: JANUARI 2023</b></h5>';

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
        a.download = 'Laporan Pengajuan SPD.xls'; // Nama file Excel yang akan diunduh
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
</script>


