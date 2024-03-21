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
                                <form action="controllers/_save_dt_pegawai" method="POST">
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-3 col-form-label">Nomor Induk Pegawai (NIP)</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_nip_pegawai">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="inp_nm_lengkap">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir <br> (Tahun-Bulan-Hari)</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="inp_tgl_lahir">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="inp_alamat">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="inp_jabatan">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Nomor Pokok Wajib Pajak (NPWP)</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_npwp">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                            <div class="col-sm-9">
                                            <select id="inputUnitKerja" class="form-select" name="inp_nm_unit">
                                                <option selected disabled>-- Pilih Unit Kerja --</option>
                                                <?php
                                                $cekUnit = $mysqli->query("SELECT * FROM dt_unit_kerja");
                                                while($LoadQryUnit = $cekUnit->fetch_array()) { 
                                                ?>
                                                    <option value="<?php echo $LoadQryUnit['inp_nm_unit']; ?>"><?php echo $LoadQryUnit['inp_nm_unit']; ?></option>
                                                <?php 
                                                    } // Tutup while loop
                                                ?>
                                                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Golongan Pegawai</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select" name="inp_golongan">
                                                    <option selected disabled>-- Pilih Golongan Pegawai --</option>
                                                    <option value="I/a-Juru Muda">I/a - Juru Muda</option>
                                                    <option value="I/b-Juru Muda TK. I">I/b - Juru Muda TK. I</option>
                                                    <option value="I/c-Juru">I/c - Juru</option>
                                                    <option value="I/d-Juru Tingkat I">I/d - Juru Tingkat I</option>
                                                    <option value="II/a-Pengatur Muda">II/a - Pengatur Muda</option>
                                                    <option value="II/b-Pengatur Muda Tk. I">II/b - Pengatur Muda Tk. I</option>
                                                    <option value="II/c-Pengatur">II/c - Pengatur</option>
                                                    <option value="II/d -Pengatur TK. I">II/d - Pengatur TK. I</option>
                                                    <option value="III/a-Penata">III/a - Penata</option>
                                                    <option value="III/b-Penata Muda Tk. I">III/b - Penata Muda Tk. I</option>
                                                    <option value="III/c-Penata">III/c - Penata</option>
                                                    <option value="III/d-Penata Tk. I">III/d - Penata Tk. I</option>
                                                    <option value="IV/a-Pembina">IV/a - Pembina</option>
                                                    <option value="IV/b-Pembina Tingkat I">IV/b - Pembina Tingkat I</option>
                                                    <option value="IV/c-Pembina Utama Muda">IV/c - Pembina Utama Muda</option>
                                                    <option value="IV/d-Pembina Utama Madya">IV/d - Pembina Utama Madya</option>
                                                    <option value="Pembina Utama">Pembina Utama</option>
                                                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Besaran Tunjangan Pokok (TPP)</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_besaran_tpp">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Nomor Rekening Bank</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_no_rekening">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Status Pegawai</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select" name="inp_status_peg">
                                                    <option selected disabled>-- Pilih Status --</option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Tidak">Tidak</option>
                                                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Umur Pensiun</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_umur_pensiun">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Sistem Asuransi Kesehatan (Saskerja - Taspen)</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select" name="inp_saskerja">
                                                    <option selected disabled>-- Pilih Saskerja --</option>
                                                    <option value="D20000502600001">D20000502600001 - Dinas Kesehatan (Puskesmas/BPU)Kab. Deli Serdang</option>
                                                    <option value="D20000502600002">D20000502600002 - Dinas Kesehatan (HONDA) Kab. Deli Serdang</option>
                                                    <option value="D20000502600003">D20000502600003 - Dinas Kesehatan (KANDEP) Kab. Deli Serdang</option>
                                                    <option value="D20000502600004">D20000502600004 - Dinas Kesehatan (Inpres) Kab.Deli Serdang </option>
                                                    <option value="D20000502600005">D20000502600005 - RUMAH SAKIT UMUM DELI SERDANG</option>
                                                    <option value="D20000502600006">D20000502600006 - DINAS KESEHATAN PEGAWAI BARU</option>
                                                    <option value="D20000502600007">K-2 D20000502600007 - Pegawai Dinas Kesehatan Umum</option>
                                                    <option value="D20000502600008">D20000502600008 - DINAS KESEHATAN PENGANGKATAN PNS JALUR PTT</option>
                                                    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">BPJS di Gaji</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_bpjs_gaji">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-3 col-form-label">Kelas Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="inp_kls_jabatan">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
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
                        <?php
                        $no = 1;
                        $cekPegawai = $mysqli->query("SELECT * FROM dt_pegawai");
                        while($LoadQryPegawai= $cekPegawai->fetch_array()) {
                        ?>
                        <tr>
                                <td class="text-center"><?=$no++;?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_nip_pegawai'];?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_nm_lengkap'];?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_nm_unit'];?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_no_rekening'];?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_status_peg'];?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_besaran_tpp']; ?></td>
                                <td class="text-center"><?=$LoadQryPegawai['inp_bpjs_gaji']; ?></td>
                                <td>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editdata" data-pegawai="<?=$LoadQryPegawai['pegawai_id'];?>">
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
                                        <form ction="controllers/_save_edit_pegawai" method="POST">
                                        <?php
                                        $no = 1;
                                        $cekUnit = $mysqli->query("SELECT * FROM dt_pegawai");
                                        while($LoadQryPegawai= $cekUnit->fetch_array()) {
                                        ?>
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Nomor Induk Pegawai (NIP)</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_nip_pegawai" value="<?php echo $LoadQryPegawai['inp_nip_pegawai']?>">
                                                    </div>
                                                    <input type="hidden" name="pegawai_id" value="<?=$LoadQryPegawai['pegawai_id'];?>">
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputEmail" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="inp_nm_lengkap" value="<?=$LoadQryPegawai['inp_nm_lengkap'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label">Tanggal Lahir <br> (Tahun-Bulan-Hari)</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" name="inp_tgl_lahir" value="<?=$LoadQryPegawai['inp_tgl_lahir'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="inp_alamat" value="<?=$LoadQryPegawai['inp_alamat'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Jabatan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="inp_jabatan" value="<?=$LoadQryPegawai['inp_jabatan'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Nomor Pokok Wajib Pajak (NPWP)</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_npwp" value="<?=$LoadQryPegawai['inp_npwp'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Unit Kerja</label>
                                                    <div class="col-sm-9">
                                                    <select id="inputUnitKerja" class="form-select" name="inp_nm_unit">
                                                        <option selected disabled>-- Pilih Unit Kerja --</option>
                                                        <?php
                                                            $cekUnit = $mysqli->query("SELECT * FROM dt_unit_kerja");
                                                                while($LoadQryUnit = $cekUnit->fetch_array()) { 
                                                            ?>
                                                                <option value="<?php echo $LoadQryUnit['id_unit']; ?>"><?php echo $LoadQryUnit['inp_nm_unit']; ?></option>
                                                            <?php 
                                                            } // Tutup while loop
                                                        ?>
                                                        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Golongan Pegawai</label>
                                                    <div class="col-sm-9">
                                                    <select id="inputUnitKerja" class="form-select" name="inp_golongan">
                                                        <option value="I/a-Juru Muda" <?php echo ($LoadQryPegawai['inp_golongan'] == 'I/a-Juru Muda') ? 'selected' : ''; ?>>I/a - Juru Muda</option>
                                                        <option value="I/b-Juru Muda TK. I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'I/b-Juru Muda TK. I') ? 'selected' : ''; ?>>I/b - Juru Muda TK. I</option>
                                                        <option value="I/c-Juru" <?php echo ($LoadQryPegawai['inp_golongan'] == 'I/c-Juru') ? 'selected' : ''; ?>>I/c - Juru</option>
                                                        <option value="I/d-Juru Tingkat I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'I/d-Juru Tingkat I') ? 'selected' : ''; ?>>I/d - Juru Tingkat I</option>
                                                        <option value="II/a-Pengatur Muda" <?php echo ($LoadQryPegawai['inp_golongan'] == 'II/a-Pengatur Muda') ? 'selected' : ''; ?>>II/a - Pengatur Muda</option>
                                                        <option value="II/b-Pengatur Muda Tk. I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'II/b-Pengatur Muda Tk. I') ? 'selected' : ''; ?>>II/b - Pengatur Muda Tk. I</option>
                                                        <option value="II/c-Pengatur" <?php echo ($LoadQryPegawai['inp_golongan'] == 'II/c-Pengatur') ? 'selected' : ''; ?>>II/c - Pengatur</option>
                                                        <option value="II/d -Pengatur TK. I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'II/d -Pengatur TK. I') ? 'selected' : ''; ?>>II/d - Pengatur TK. I</option>
                                                        <option value="III/a-Penata" <?php echo ($LoadQryPegawai['inp_golongan'] == 'III/a-Penata') ? 'selected' : ''; ?>>III/a - Penata</option>
                                                        <option value="III/b-Penata Muda Tk. I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'III/b-Penata Muda Tk. I') ? 'selected' : ''; ?>>III/b - Penata Muda Tk. I</option>
                                                        <option value="III/c-Penata" <?php echo ($LoadQryPegawai['inp_golongan'] == 'III/c-Penata') ? 'selected' : ''; ?>>III/c - Penata</option>
                                                        <option value="III/d-Penata Tk. I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'III/d-Penata Tk. I') ? 'selected' : ''; ?>>III/d - Penata Tk. I</option>
                                                        <option value="IV/a-Pembina" <?php echo ($LoadQryPegawai['inp_golongan'] == 'IV/a-Pembina') ? 'selected' : ''; ?>>IV/a - Pembina</option>
                                                        <option value="IV/b-Pembina Tingkat I" <?php echo ($LoadQryPegawai['inp_golongan'] == 'IV/b-Pembina Tingkat I') ? 'selected' : ''; ?>>IV/b - Pembina Tingkat I</option>
                                                        <option value="IV/c-Pembina Utama Muda" <?php echo ($LoadQryPegawai['inp_golongan'] == 'IV/c-Pembina Utama Muda') ? 'selected' : ''; ?>>IV/c - Pembina Utama Muda</option>
                                                        <option value="IV/d-Pembina Utama Madya" <?php echo ($LoadQryPegawai['inp_golongan'] == 'IV/d-Pembina Utama Madya') ? 'selected' : ''; ?>>IV/d - Pembina Utama Madya</option>
                                                        <option value="Pembina Utama" <?php echo ($LoadQryPegawai['inp_golongan'] == 'Pembina Utama') ? 'selected' : ''; ?>>Pembina Utama</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Besaran Tunjangan Pokok (TPP)</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_besaran_tpp" value="<?=$LoadQryPegawai['inp_besaran_tpp'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Nomor Rekening Bank</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_no_rekening" value="<?=$LoadQryPegawai['inp_no_rekening'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Status Pegawai</label>
                                                    <div class="col-sm-9">
                                                    <select id="inputUnitKerja" class="form-select" name="inp_status_peg">
                                                        <option <?php echo ($LoadQryPegawai['inp_status_peg'] == 'Aktif') ? 'selected' : ''; ?> value="Aktif">Aktif</option>
                                                        <option <?php echo ($LoadQryPegawai['inp_status_peg'] == 'Tidak') ? 'selected' : ''; ?> value="Tidak">Tidak</option>
                                                        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Umur Pensiun</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_umur_pensiun" value="<?=$LoadQryPegawai['inp_no_rekening'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputUnitKerja" class="col-sm-3 col-form-label">Sistem Asuransi Kesehatan (Saskerja - Taspen)</label>
                                                    <div class="col-sm-9">
                                                    <select id="inputUnitKerja" class="form-select" name="inp_saskerja">
                                                        <option selected disabled>-- Pilih Saskerja --</option>
                                                        <option value="D20000502600001" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600001') ? 'selected' : ''; ?>>D20000502600001 - Dinas Kesehatan (Puskesmas/BPU)Kab. Deli Serdang</option>
                                                        <option value="D20000502600002" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600002') ? 'selected' : ''; ?>>D20000502600002 - Dinas Kesehatan (HONDA) Kab. Deli Serdang</option>
                                                        <option value="D20000502600003" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600003') ? 'selected' : ''; ?>>D20000502600003 - Dinas Kesehatan (KANDEP) Kab. Deli Serdang</option>
                                                        <option value="D20000502600004" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600004') ? 'selected' : ''; ?>>D20000502600004 - Dinas Kesehatan (Inpres) Kab.Deli Serdang </option>
                                                        <option value="D20000502600005" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600005') ? 'selected' : ''; ?>>D20000502600005 - RUMAH SAKIT UMUM DELI SERDANG</option>
                                                        <option value="D20000502600006" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600006') ? 'selected' : ''; ?>>D20000502600006 - DINAS KESEHATAN PEGAWAI BARU</option>
                                                        <option value="D20000502600007" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600007') ? 'selected' : ''; ?>>K-2 D20000502600007 - Pegawai Dinas Kesehatan Umum</option>
                                                        <option value="D20000502600008" <?php echo ($LoadQryPegawai['inp_saskerja'] == 'D20000502600008') ? 'selected' : ''; ?>>D20000502600008 - DINAS KESEHATAN PENGANGKATAN PNS JALUR PTT</option>
                                                        <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">BPJS di Gaji</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_bpjs_gaji" value="<?=$LoadQryPegawai['inp_bpjs_gaji'];?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Kelas Jabatan</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="inp_kls_jabatan" value="<?=$LoadQryPegawai['inp_kls_jabatan'];?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">Submit</button>
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
                            <?php }
                        } ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>