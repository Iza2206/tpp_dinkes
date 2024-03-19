<div class="pagetitle">
    <h1>Data Pegawai Per Unit Kerja</h1>
</div>
<!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                        <i class="bi bi-person-plus"></i> Tambah Data
                    </button>
                    <br>
                    <div style="display: flex; align-items: center;">
                        <h5 style="margin-right: 10px;">Pilih Unit Kerja</h5>
                        <select class="form-select mb-3" style="width: 200px;">
                            <option selected disabled>Pilih salah satu</option>
                            <option value="1">Unit Kerja 1</option>
                            <option value="2">Unit Kerja 2</option>
                            <option value="3">Unit Kerja 3</option>
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                        <div style="margin-left: 10px;">
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
                        </div>
                    </div>
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
                    <!-- End Large Modal-->
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Rekening</th>
                                <th scope="col">Status</th>
                                <th scope="col">TPP</th>
                                <th scope="col">BPJS Gaji</th>
                                <th scope="col">Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>197611292006041006</td>
                                <td>dr. Asri Ludin Tambunan, M.Ked(PD), Sp.PD</td>
                                <td>DINAS KESEHATAN</td>
                                <td>10602090038588</td>
                                <td>Status</td>
                                <td>20.000.000</td>
                                <td>278.298</td>
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
</section>