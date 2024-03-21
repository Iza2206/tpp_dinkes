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
                                <form action="controllers/_save_unit_kerja" method="POST">
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nama Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="inp_nm_unit" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="inp_alamat" class="form-control">
                                            </div>
                                        </div>
                                        <h5 class="modal-title"><b>Data Pimpinan Unit Kerja</b></h5>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="inp_nip" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="inp_nm_pegawai" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="inp_jabatan" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Large Modal-->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Unit Kerja</th>
                                <th scope="col">Nama Alamat</th>
                                <th scope="col">NIP Pimpinan</th>
                                <th scope="col">Nama Pimpinan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $cekUnit = $mysqli->query("SELECT * FROM dt_unit_kerja");
                        while($LoadQryUnit= $cekUnit->fetch_array()) {
                        ?>
                            <tr>
                            <td class="text-center"><?=$no++;?></td>
                            <td class="text-center"><?=$LoadQryUnit['inp_nm_unit'];?></td>
                            <td class="text-center"><?=$LoadQryUnit['inp_alamat'];?></td>
                            <td class="text-center"><?=$LoadQryUnit['inp_nip'];?></td>
                            <td class="text-center"><?=$LoadQryUnit['inp_nm_pegawai'];?></td>
                            <td class="text-center"><?=$LoadQryUnit['inp_jabatan'];?></td>
                            <td>
                                <button type="button" class="btn btn-secondary editBtn" data-bs-toggle="modal" data-bs-target="#editdata" data-id-unit="<?=$LoadQryUnit['id_unit'];?>">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#hapusdata">
                                <i class="bi bi-trash"></i>
                                </button>
                            </td>
                            </tr>
                            <div class="modal fade" id="editdata" tabindex="-1">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Data Pegawai</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="controllers/_save_edit_unit" method="POST">
                                        <?php
                                        $no = 1;
                                        $cekUnit = $mysqli->query("SELECT * FROM dt_unit_kerja");
                                        while($LoadQryUnit= $cekUnit->fetch_array()) {
                                        ?>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Unit Kerja</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="inp_nm_unit" class="form-control" value="<?php echo $LoadQryUnit['inp_nm_unit']?>">
                                                    </div>
                                                    <input type="hidden" name="id_unit" value="<?=$LoadQryUnit['id_unit'];?>">
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="inp_alamat" class="form-control" value="<?php echo $LoadQryUnit['inp_alamat']?>">
                                                    </div>
                                                </div>
                                                <h5 class="modal-title"><b>Data Pimpinan Unit Kerja</b></h5>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">NIP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="inp_nip" class="form-control" value="<?php echo $LoadQryUnit['inp_nip']?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Nama Pimpinan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="inp_nm_pegawai" class="form-control" value="<?php echo $LoadQryUnit['inp_nm_pegawai']?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-2 col-form-label">Jabatan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="inp_jabatan" class="form-control" value="<?php echo $LoadQryUnit['inp_nm_pegawai']?>">
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
                                        <button type="button" class="btn btn-danger" onclick="hapusData()">Ya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php } 
                                }
                            ?>
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</section>