
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
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <Form>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Pilih Pegawai</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select">
                                                    <option selected disabled>Pilih Pegawai</option>
                                                    <option value="1">(1) Januari</option>
                                                    <option value="2">(2) Februari</option>
                                                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </Form>
                            </div>
                        </div>
                    </div>
                    <!-- End Large Modal-->
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <!-- Column headers -->
                                <th scope="col" rowspan="2">no</th> 
                                <th scope="col" rowspan="2">NIP</th> 
                                <th scope="col" rowspan="2">Nama</th> 
                                <th scope="col" rowspan="2">Gol</th> 
                                <th scope="col" rowspan="2">Besaran TPP</th> 
                                <th scope="col" colspan="5">komponen perhitungan</th> 
                                <th scope="col" rowspan="2">JML%</th> 
                                <th scope="col" rowspan="2">Pot Bulan lalu</th> 
                                <th scope="col" rowspan="2">Pot. Hukuman Disiplin</th> 
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
                        <th scope="row">1</th>
                                <td>2123132123</td>
                                <td>Oman</td>
                                <td>IV/e</td>
                                <td>7.000.000</td>
                                <td>60.00</td>
                                <td>20.00</td>
                                <td>20.00</td>
                                <td>00.00</td>
                                <td>00.00</td>
                                <td>100</td>
                                <td>00.00</td>
                                <td>00.00</td>
                                <td>300.000 <br>
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editbpjs">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </td>
                                <td>180.000</td>
                                <td>45.000</td>
                                <td>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editdata">
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
                                            <form>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">BPJS Gaji (4%)</label>
                                                    <input type="number" class="form-control" id="BPJSGaji" placeholder="Masukkan BPJS Gaji (4%)">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">BPJS TPP (4%)</label>
                                                    <input type="number" class="form-control" id="BPJSTPP" placeholder="Masukkan BPJS TPP (4%)">
                                                </div>
                                                <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdata" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editdata">Isi Presentase Komponen TPP</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Isi form edit data disini -->
                                            <form>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">NIP</label>
                                                    <input type="text" class="form-control" id="nama" disabel>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Nama</label>
                                                    <input type="number" class="form-control" id="BPJSGaji" disable>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Besaran TPP</label>
                                                    <input type="number" class="form-control" id="BPJSTPP" disabel>
                                                </div>
                                                <hr>
                                                <h5>Aspek Perilaku Kerja</h5>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Kehadiran</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="nama">
                                                        <span class="input-group-text" style="color: red;">(Max:30)</span>
                                                    </div>
                                                </div>
                                                <h5>Aspek Prestasi Kerja</h5>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">SKP</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="nama">
                                                        <span class="input-group-text" style="color: red;">(Max:20)</span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Laporan Harian</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="nama" >
                                                        <span class="input-group-text" style="color: red;">(Max:50)</span>
                                                    </div>
                                                </div>
                                                </h5>Pengurangan TPP</h5>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Terlambat Datang</label>
                                                    <input type="number" class="form-control" id="BPJSGaji">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Pulang Sebelum Waktunya</label>
                                                    <input type="number" class="form-control" id="BPJSTPP">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Pot Bulan lalu</label>
                                                    <input type="number" class="form-control" id="BPJSGaji">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Pot. Hukuman Disiplin</label>
                                                    <input type="number" class="form-control" id="BPJSTPP">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umur" class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" id="BPJSTPP">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
</section>