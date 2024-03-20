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
                    <table class="table table-bordered table-striped">
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
                            <tr>
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
                                <td>300.000 <br>
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editbpjs">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </td>
                                <td>180.000</td>
                                <td>45.000</td>
                                <td>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editdata">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#hapusdata">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="editdata" tabindex="-1">
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
                                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor Induk Pegawai (NIP)</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir <br> (Tahun-Bulan-Hari)</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Jabatan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Nomor Pokok Wajib Pajak (NPWP)</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                                    <div class="col-sm-9">
                                                        <select id="inputUnitKerja" class="form-select">
                                                            <option selected disabled>Pilih salah satu</option>
                                                            <option value="1">Unit Kerja 1</option>
                                                            <option value="2">Unit Kerja 2</option>
                                                            <option value="3">Unit Kerja 3</option>
                                                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Golongan Pegawai</label>
                                                    <div class="col-sm-9">
                                                        <select id="inputUnitKerja" class="form-select">
                                                            <option selected disabled>Pilih salah satu</option>
                                                            <option value="1">Golongan 1</option>
                                                            <option value="2">Golongan 2</option>
                                                            <option value="3">Golongan 3</option>
                                                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Besaran Tunjangan Pokok (TPP)</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Nomor Rekening Bank</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Status Pegawai</label>
                                                    <div class="col-sm-9">
                                                        <select id="inputUnitKerja" class="form-select">
                                                            <option selected disabled>Pilih salah satu</option>
                                                            <option value="1">Status 1</option>
                                                            <option value="2">Status 2</option>
                                                            <option value="3">Status 3</option>
                                                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Umur Pensiun</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Sistem Asuransi Kesehatan (Saskerja - Taspen)</label>
                                                    <div class="col-sm-9">
                                                        <select id="inputUnitKerja" class="form-select">
                                                            <option selected disabled>Pilih salah satu</option>
                                                            <option value="1">Saskerja 1</option>
                                                            <option value="2">Saskerja 2</option>
                                                            <option value="3">Saskerja 3</option>
                                                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">BPJS di Gaji</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Kelas Jabatan</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control">
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