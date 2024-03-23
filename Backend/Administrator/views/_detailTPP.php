<?php
if (isset($_GET['id_unit'])) {
    $id_unit = $_GET['id_unit'];

    echo "ID Unit: " . $id_unit;
} else {
    echo "Parameter id_unit tidak ditemukan dalam URL.";
}
?>

<div class="pagetitle">
    <h1>Detail TPP</h1>
</div>
<!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                        <i class="bi bi-person-plus"></i> Tambah Rincian
                    </button>
                    <br>
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Pegawai</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="controllers/_save_detail_presentase" method="POST">
                                <?php 
                                $id_unit = $_GET['id_unit'];
                                $qry = "SELECT * FROM dt_pegawai WHERE id_unit='$id_unit'";
                                $result1 = $mysqli->query($qry);

                                if($result1) {
                                    $no = 1;
                                    while ($dt_proses = $result1->fetch_assoc()) {
                                ?>
                                <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Pilih Pegawai</label>
                                    <div class="col-sm-9">
                                        <select class="form-select inp_nm_lengkap" name="id_pegawai" id="pegawai_id">
                                            <option selected disabled>-- Pilih Pegawai --</option>
                                            <?php
                                            $result = $mysqli->query("SELECT pegawai_id, inp_nm_lengkap FROM dt_pegawai");
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['pegawai_id'] . "'>" . $row['inp_nm_lengkap'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    </div>
                                    </div>
                                    <input type="hidden" name="id_unit" class="id_unit form-control" readonly>
                                    <input type="hidden" name="inp_nip_pegawai" class="inp_nip_pegawai form-control" readonly>
                                    <input type="hidden" name="inp_besaran_tpp" class="inp_besaran_tpp form-control" readonly>
                                    <input type="hidden" name="inp_golongan" class="inp_golongan form-control" readonly>
                                    <!-- ================================================================================== -->
                                    <input type="hidden" class="form-control" name="inp_kehadiran" value="30" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_skp" value="20" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_lap_harian" value="50" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_terlambat_dtg" value="0" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_plg_sebelum_wkt" value="0" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_ket" value="0" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_potongan_bln" value="0" disabel readonly>
                                    <input type="hidden" class="form-control" name="inp_hukuman_disiplin" value="0" disabel readonly>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Simpan</button>
                                    </div>
                                </div>
                            </form>
                            <?php } } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- Column headers -->
                                <th scope="col" rowspan="2">No</th> 
                                <th scope="col" rowspan="2">NIP</th> 
                                <th scope="col" rowspan="2">Nama</th> 
                                <th scope="col" rowspan="2">Gol</th> 
                                <th scope="col" rowspan="2">Besaran TPP</th> 
                                <th scope="col" colspan="5">komponen perhitungan</th> 
                                <th scope="col" rowspan="2">JML%</th> 
                                <th scope="col" colspan="3">BPJS Gaji</th> 
                                <th scope="col" rowspan="2">Action</th> 
                            </tr>
                            <tr>
                                <!-- sub Kompenen perhitungan -->
                                <th scope="col">Kehadiran</th>
                                <th scope="col">SKP</th>
                                <th scope="col">Lap.Harian</th>
                                <th scope="col">DTW</th>
                                <th scope="col">PTW</th>
                                <!-- sub BPJS -->
                                <th scope="col">Gaji</th> 
                                <th scope="col">4%</th>
                                <th scope="col">1%</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $cekPegawai = $mysqli->query("SELECT * FROM dt_detail_presentase INNER JOIN dt_pegawai ON dt_detail_presentase.id_pegawai = dt_pegawai.pegawai_id");
                        while($dt_proses= $cekPegawai->fetch_array()) {
                        ?>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $dt_proses['inp_nip_pegawai']; ?></td>
                        <td><?= $dt_proses['inp_nm_lengkap']; ?></td>
                        <td><?= $dt_proses['inp_golongan']; ?></td>
                        <td><?= $dt_proses['inp_besaran_tpp']; ?></td>
                        <td><?= $dt_proses['inp_kehadiran']; ?></td>
                        <td><?= $dt_proses['inp_skp']; ?></td>
                        <td><?= $dt_proses['inp_lap_harian']; ?></td>
                        <td><?= $dt_proses['inp_terlambat_dtg']; ?></td>
                        <td><?= $dt_proses['inp_plg_sebelum_wkt']; ?></td>
                        <?php
                            $inp_kehadiran = intval($dt_proses['inp_kehadiran']);
                            $inp_skp = intval($dt_proses['inp_skp']);
                            $inp_lap_harian = intval($dt_proses['inp_lap_harian']);
                            $inp_terlambat_dtg = intval($dt_proses['inp_terlambat_dtg']);
                            $inp_plg_sebelum_wkt = intval($dt_proses['inp_plg_sebelum_wkt']);

                            // Hitung total
                            $total = $inp_kehadiran + $inp_skp + $inp_lap_harian + $inp_terlambat_dtg + $inp_plg_sebelum_wkt;
                        ?>
                        <td><?= $total; ?></td>
                        <td><?= $dt_proses['inp_bpjs_gaji']; ?> <br>
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editbpjs">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                                </td>
                                <td><?= $dt_proses['inp_bpjs_tpp']; ?></td>
                                <td>0</td>
                                <td>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editdata" data-id-unit="<?= $dt_proses['pegawai_id']; ?>">
                                        Isi Data
                                    </button>
                                    <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#hapusdata">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            
                            <div class="modal fade" id="editbpjs" tabindex="-1" aria-labelledby="editdatabpjsLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editdatabpjsLabel">Edit BPJS</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Isi form edit data disini -->
                                            <form action="controllers/_save_edit_bpjs_gaji" method="POST">
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="inp_nm_lengkap" value="<?= $dt_proses['inp_nm_lengkap']; ?>" disabel readonly style="background-color: #f2f2f2; color: #999;">
                                                </div>
                                                <input type="hidden" class="form-control" name="id_pegawai" value="<?= $dt_proses['pegawai_id']; ?>" readonly>
                                                <input type="hidden" class="form-control" name="id_unit" value="<?= $dt_proses['id_unit']; ?>" readonly>
                                                <div class="mb-3">
                                                    <label for="gaji" class="form-label">BPJS Gaji (4%)</label>
                                                    <input type="number" class="form-control" name="inp_bpjs_gaji" value="<?= $dt_proses['inp_bpjs_gaji']; ?>" placeholder="Masukkan BPJS Gaji (4%)">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bpjs" class="form-label">BPJS TPP (4%)</label>
                                                    <input type="number" class="form-control" name="inp_bpjs_tpp" placeholder="Masukkan BPJS TPP (4%)">
                                                </div>
                                                <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" name="submit" value="Save" class="btn btn-primary btn-md">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdataLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="editdataLabel" data-pegawai-id="">Isi Presentase Komponen TPP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="controllers/_save_update_presentase" method="POST">
                                        <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="" class="form-label">NIP</label>
                                            <input type="text" class="form-control" name="inp_nip_pegawai" value="<?= $dt_proses['inp_nip_pegawai']; ?>" disabel readonly style="background-color: #f2f2f2; color: #999;">
                                        </div>
                                        <input type="hidden" class="form-control" name="id_pegawai" value="<?= $dt_proses['pegawai_id']; ?>" disabel readonly style="background-color: #f2f2f2; color: #999;">
                                        <input type="hidden" class="form-control" name="id_unit" value="<?= $dt_proses['id_unit']; ?>" disabel readonly style="background-color: #f2f2f2; color: #999;">
                                        <input type="hidden" name="detail_id" value="<?php echo isset($detail_id) ? $detail_id : ''; ?>">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="inp_nm_lengkap" value="<?= $dt_proses['inp_nm_lengkap']; ?>" disabel readonly style="background-color: #f2f2f2; color: #999;">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Besaran TPP</label>
                                            <input type="number" class="form-control" name="inp_besaran_tpp" value="<?= $dt_proses['inp_besaran_tpp']; ?>" disabel readonly style="background-color: #f2f2f2; color: #999;">
                                        </div>
                                        <hr>
                                        <h5>Aspek Perilaku Kerja</h5>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Kehadiran</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="inp_kehadiran" value="<?= $dt_proses['inp_kehadiran']; ?>" max="30" onkeydown="if(this.value.length>=2 && event.keyCode>47) return false;" onkeyup="if(this.value>30) this.value='30';">
                                                <span class="input-group-text" style="color: red;">(Max: 30)</span>
                                            </div>
                                        </div>
                                        <h5>Aspek Prestasi Kerja</h5>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">SKP</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="inp_skp" value="<?= $dt_proses['inp_skp']; ?>" max="20" oninput="if(parseInt(this.value) > parseInt(this.max)) { this.value = this.max; }">
                                                <span class="input-group-text" style="color: red;">(Max: 20)</span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Laporan Harian</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="inp_lap_harian" value="<?= $dt_proses['inp_lap_harian']; ?>" max="50" oninput="if(parseInt(this.value) > parseInt(this.max)) { this.value = this.max; }">
                                                <span class="input-group-text" style="color: red;">(Max: 50)</span>
                                            </div>
                                        </div>
                                        </h5>Pengurangan TPP</h5>
                                        <div class="mb-3">
                                            <label for="umur" class="form-label">Terlambat Datang</label>
                                            <input type="number" class="form-control" name="inp_terlambat_dtg" value="<?= $dt_proses['inp_terlambat_dtg']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="umur" class="form-label">Pulang Sebelum Waktunya</label>
                                            <input type="number" class="form-control" name="inp_plg_sebelum_wkt" value="<?= $dt_proses['inp_plg_sebelum_wkt']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="umur" class="form-label">Keterangan</label>
                                            <input type="text" class="form-control" name="inp_ket" value="<?= $dt_proses['inp_ket']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" name="submit" value="Update" class="btn btn-primary btn-md">Simpan</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php } ?>
                            <div class="modal fade" id="hapusdata" tabindex="-1" aria-labelledby="hapusdataLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusdataLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Yakin menghapus data?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-danger">Ya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pastikan jQuery dimuat sebelum menggunakan kode jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Menambahkan event listener untuk mengambil data ketika dropdown berubah
    document.getElementById('pegawai_id').addEventListener('change', function() {
        // Mengambil nilai pegawai_id yang dipilih
        var selectedPegawaiId = this.value;

        // Menggunakan AJAX untuk mengirim data ke server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'controllers/get_pegawai');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Menguraikan JSON yang diterima dari server
                var data = JSON.parse(xhr.responseText);

                // Menetapkan nilai ID Unit, NIP Pegawai, Golongan, dan Besaran TPP ke input yang sesuai
                document.querySelector('.id_unit').value = data.id_unit;
                document.querySelector('.inp_nip_pegawai').value = data.inp_nip_pegawai;
                document.querySelector('.inp_besaran_tpp').value = data.inp_besaran_tpp;
                document.querySelector('.inp_golongan').value = data.inp_golongan;
            } else {
                console.log('Request failed. Returned status of ' + xhr.status);
            }
        };
        // Mengirim data pegawai_id ke server
        xhr.send('pegawai_id=' + selectedPegawaiId);
    });
</script>

