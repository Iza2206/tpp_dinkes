<div class="pagetitle">
    <h1>Data Pegawai Per Unit Kerja</h1>
</div>
<!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <!-- bagian pilih unit kerja -->
                    <form action="controllers/_save_pembayaran_tpp" method="POST">
                    <div class="d-flex align-items-center">
                        <h5 style="me-2">Pilih Unit Kerja</h5>
                        <select class="form-select mb-3 me-2" name="inp_nm_unit" style="width: 200px;">
                        <option selected disabled>-- Pilih Unit Kerja --</option>
                        <?php
                            // Query untuk mengambil data dari database
                            $result = $mysqli->query("SELECT id_unit, inp_nm_unit FROM dt_proses_tpp_unitkerja");
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['id_unit']."'>".$row['inp_nm_unit']."</option>";
                            }
                        ?>
                        </select>
                        <select class="form-select mb-3 ms-2 me-2" name="inp_tahun" style="width: 200px;">
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
                        <input type="hidden" name="id_unit" class="id_unit form-control" readonly>
                        <input type="hidden" name="inp_nm_unit" class="inp_nm_unit form-control" readonly>
                        <input type="hidden" name="inp_tahun" class="inp_tahun form-control" readonly>
                        <input type="hidden" name="inp_bulan" class="inp_bulan form-control" readonly>
                        <input type="hidden" name="inp_uraian" class="inp_uraian form-control" readonly>
                        <input type="hidden" name="inp_rencana_bayar" class="inp_rencana_bayar form-control" value="" readonly>
                        <input type="hidden" name="inp_status" class="inp_status form-control" value="" readonly>
                    <!-- End Large Modal-->
                    </form>
                    <!-- Table with stripped rows -->
                    <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Rencana Bayar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $cekUnit = $mysqli->query("SELECT * FROM dt_pembayaran_tpp");
                        while($LoadQryPembayaran= $cekUnit->fetch_array()) {
                        ?>
                        <tr>
                        <td class="text-center"><?=$no++;?></td>
                        <td class="text-center"><?=$LoadQryPembayaran['inp_bulan'];?></td>
                        <td class="text-center"><?=$LoadQryPembayaran['inp_tahun'];?></td>
                        <td class="text-center"><?=$LoadQryPembayaran['inp_nm_unit'];?></td>
                        <td class="text-center"><?=$LoadQryPembayaran['inp_rencana_bayar'];?></td>
                        <td class="text-center"><?=$LoadQryPembayaran['inp_status'];?></td>
                        <td>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#persetujuan<?=$LoadQryPembayaran['id_unit'];?>">
                            Pembayaran
                        </button>
                        </td>
                        </tr>
                        <div class="modal fade" id="persetujuan<?=$LoadQryPembayaran['id_unit'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Proses Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="controllers/_save_proses_pembayaranTPP" method="POST">
                                    <div class="modal-body">
                                        <!-- hanya menampilkan data -->
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-3 col-form-label">Bulan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="inp_bulan" value="<?=$LoadQryPembayaran['inp_bulan'];?>" disabled>
                                            </div>
                                        </div>
                                        <input type="hidden" name="inp_bulan" value="<?=$LoadQryPembayaran['inp_bulan'];?>" />
                                        <input type="hidden" name="id_unit" value="<?=$LoadQryPembayaran['id_unit'];?>" />
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Tahun</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="inp_tahun" value="<?=$LoadQryPembayaran['inp_tahun'];?>" disabled>
                                            </div>
                                        </div>
                                        <input type="hidden" name="inp_tahun" value="<?=$LoadQryPembayaran['inp_tahun'];?>" />
                                        <div class="row mb-3">
                                            <label for="text" class="col-sm-3 col-form-label">Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="inp_nm_unit" value="<?=$LoadQryPembayaran['inp_nm_unit'];?>" disabled>
                                            </div>
                                        </div>
                                        <input type="hidden" name="inp_nm_unit" value="<?=$LoadQryPembayaran['inp_nm_unit'];?>" />
                                        <div class="row mb-3">
                                            <label for="inputuraian" class="col-sm-3 col-form-label">Uraian</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="inp_uraian" disabled><?=$LoadQryPembayaran['inp_uraian'];?></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="inp_uraian" value="<?=$LoadQryPembayaran['inp_uraian'];?>" />
                                        <div class="row mb-3">
                                            <label for="text" class="col-sm-3 col-form-label">Rencana Bayar</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="inp_rencana_bayar" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mb-3">
                                            <label for="inputUnitKerja" class="col-sm-3 col-form-label">Persetujuan</label>
                                            <div class="col-sm-9">
                                                <select id="inputUnitKerja" class="form-select" name="inp_status">
                                                    <option selected disabled>-- Pilih Persetujuan --</option>
                                                    <option value="Sudah Disetujui">Sudah Disetujui</option>
                                                    <option value="Belum Setujui">Belum Setujui</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Rencana Bayar (YYYY-MM-DD)</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="inp_rencana_bayar" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" name="submit" value="Save" class="btn btn-primary btn-md">Simpan</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    // Ketika pilihan unit kerja berubah
    $('select[name="inp_nm_unit"]').change(function(){
        var id_unit = $(this).val(); // Ambil nilai id_unit yang dipilih
        var tahun = $('select[name="inp_tahun"]').val(); // Ambil nilai tahun yang dipilih
        $.ajax({
            url: 'controllers/_get_pembayaranTPP', // Ganti dengan path menuju file PHP yang menangani permintaan data
            method: 'POST',
            data: {id_unit: id_unit}, // Kirim data ke PHP
            dataType: 'json',
            success: function(response){
                // Isi nilai-nilai input dengan data yang diterima dari PHP
                $('input[name="id_unit"]').val(response.id_unit);
                $('input[name="inp_nm_unit"]').val(response.inp_nm_unit);
                $('input[name="inp_tahun"]').val(response.inp_tahun);
                $('input[name="inp_bulan"]').val(response.inp_bulan);
                $('input[name="inp_uraian"]').val(response.inp_uraian);
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText); // Log pesan kesalahan jika terjadi
            }
        });
    });
});
</script>