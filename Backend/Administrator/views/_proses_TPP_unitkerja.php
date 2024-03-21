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
                    <div class="d-flex align-items-center">
                        <h5 style="me-2">Pilih Unit Kerja</h5>
                        <select class="form-select mb-3 me-2" style="width: 200px;">
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
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                        <select class="form-select mb-3 ms-2 me-2" style="width: 200px;">
                            <option selected disabled>Pilih Tahun</option>
                            <option value="1">2023</option>
                            <option value="2">2022</option>
                            <option value="3">2020</option>
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                        <div  class="mb-3 justify-content-end" style="width: 200px;" >
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
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Bulan</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select">
                                                    <option selected disabled>Pilih Bulan</option>
                                                    <option value="1">(1) Januari</option>
                                                    <option value="2">(2) Februari</option>
                                                    <option value="3">(3) Maret</option>
                                                    <option value="4">(4) April</option>
                                                    <option value="5">(5) Mei</option>
                                                    <option value="6">(6) Juni</option>
                                                    <option value="7">(7) Juli</option>
                                                    <option value="8">(8) Agustus</option>
                                                    <option value="9">(9) September</option>
                                                    <option value="10">(10) Oktober</option>
                                                    <option value="11">(11) November</option>
                                                    <option value="12">(12) Desember</option>
                                                    <option value="13">(13) TPP THR</option>
                                                    <option value="14">(14) TPP 13</option>
                                                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Tahun</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select">
                                                    <option selected disabled>Pilih Tahun</option>
                                                    <option value="1">2023</option>
                                                    <option value="2">2022</option>
                                                    <option value="3">2020</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select">
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
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Uraian</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="3"></textarea>
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
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail Rincian</th>
                                <th scope="col">Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Januari</td>
                                <td>2023</td>
                                <td>DINAS KESEHATAN</td>
                                <td>Sudah Disetujui</td>
                                <td>
                                    <a href="?page=Detail_TPP" class="btn btn-primary">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                </td>

                                </td>
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
                                                <!-- hanya menampilkan data -->
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Bulan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputEmail" class="col-sm-3 col-form-label">Tahun</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label">Unit Kerja</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <!-- yang ini baru bisa di edit -->
                                                <div class="row mb-3">
                                                    <label for="inputuraian" class="col-sm-3 col-form-label">Uraian</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control"></textarea>
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