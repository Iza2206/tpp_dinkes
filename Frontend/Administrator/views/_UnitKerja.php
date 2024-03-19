<div class="pagetitle">
    <h1>Data Unit Kerja</h1>
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
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Unit Kerja</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <Form>
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nama Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <h5 class="modal-title"><b>Data Pimpinan Unit Kerja</b></h5>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
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
                                <th scope="col">Nama Unit Kerja</th>
                                <th scope="col">Nama Alamat</th>
                                <th scope="col">Nama Pimpinan</th>
                                <th scope="col">Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Dinas Kesehatan
                                </td>
                                <td>Lubuk Pakam</td>
                                <td>
                                    Test</td>
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
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Unit Kerja</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <h5 class="modal-title"><b>Data Pimpinan Unit Kerja</b></h5>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">NIP</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Jabatan</label>
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
                </div>
            </div>

        </div>
    </div>
</section>