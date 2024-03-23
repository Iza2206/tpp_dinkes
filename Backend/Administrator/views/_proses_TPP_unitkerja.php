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
                    <!-- bagian pilih unit kerja -->
                    <div class="d-flex align-items-center">
                        <h5 style="me-2">Pilih Unit Kerja</h5>
                        <select class="form-select mb-3 me-2" style="width: 200px;">
                        <option selected disabled>-- Pilih Unit Kerja --</option>
                        <?php
                            // Di sini Anda melakukan query ke database untuk mengambil semua unit kerja
                            $cekUnit = $mysqli->query("SELECT * FROM dt_unit_kerja");
                            while($LoadQryUnit = $cekUnit->fetch_array()) { 
                            ?>
                            <option value="<?php echo $LoadQryUnit['id_unit']; ?>"><?php echo $LoadQryUnit['inp_nm_unit']; ?></option>
                            <?php 
                            } // Tutup while loop
                        ?>
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
                    <!-- ============================== modal tambah data ============================== -->
                    <div class="modal fade" id="largeModal" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Pegawai</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="controllers/_save_proses_tpp_unitKerja" method="POST">
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="" class="col-sm-3 col-form-label">Bulan</label>
                                            <div class="col-sm-9">
                                                <select id="" class="form-select" name="inp_bulan">
                                                    <option selected disabled>Pilih Bulan</option>
                                                    <option value="Januari">(1) Januari</option>
                                                    <option value="Februari">(2) Februari</option>
                                                    <option value="Maret">(3) Maret</option>
                                                    <option value="April">(4) April</option>
                                                    <option value="Mei">(5) Mei</option>
                                                    <option value="Juni">(6) Juni</option>
                                                    <option value="Juli">(7) Juli</option>
                                                    <option value="Agustus">(8) Agustus</option>
                                                    <option value="September">(9) September</option>
                                                    <option value="Oktober">(10) Oktober</option>
                                                    <option value="November">(11) November</option>
                                                    <option value="Desember">(12) Desember</option>
                                                    <option value="TPP THR">(13) TPP THR</option>
                                                    <option value="TPP 13">(14) TPP 13</option>
                                                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-sm-3 col-form-label">Tahun</label>
                                            <div class="col-sm-9">
                                                <select id="" class="form-select" name="inp_tahun">
                                                    <option selected disabled>-- Pilih Tahun --</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2020">2020</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <select class="form-select inp_nm_unit" name="id_unit">
                                                    <option selected disabled>-- Pilih Unit Kerja --</option>
                                                    <?php
                                                        // Query untuk mengambil data dari database
                                                        $result = $mysqli->query("SELECT id_unit, inp_nm_unit FROM dt_unit_kerja");
                                                        while($row = $result->fetch_assoc()) {
                                                            echo "<option value='".$row['id_unit']."'>".$row['inp_nm_unit']."</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <input type="hidden" name="inp_nm_unit" class="inp_nm_unit_hidden" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Uraian</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="3" name="inp_uraian"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
                                        </div>
                                    </div>
                                </form>
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
                        <?php
                        $no = 1;
                        $cekProses = $mysqli->query("SELECT * FROM dt_proses_tpp_unitkerja");
                        while($LoadQryproses= $cekProses->fetch_array()) {
                        ?>
                            <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="text-center"><?=$LoadQryproses['inp_bulan'];?></td>
                            <td class="text-center"><?=$LoadQryproses['inp_tahun'];?></td>
                            <td class="text-center"><?=$LoadQryproses['inp_nm_unit'];?></td>
                            <td class="text-center"><?=$LoadQryproses['inp_uraian'];?></td>
                            <td>
                                <a href="?page=Detail_TPP&id_unit=<?= $LoadQryproses['id_unit']; ?>" class="btn btn-primary">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
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
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelector('.inp_nm_unit').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var hiddenInput = document.querySelector('.inp_nm_unit_hidden');
        hiddenInput.value = selectedOption.textContent;
    });
</script>


