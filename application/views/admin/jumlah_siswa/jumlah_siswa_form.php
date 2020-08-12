<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"><?= ucfirst($page); ?> Data Jumlah Siswa</h6>
            <div>
                <a href="<?= base_url('admin/jumlah_siswa') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('admin/jumlah_siswa/process') ?>" method="post">
                        <div class="form-group">
                            <label for="tahun_ajaran">Tahun Ajaran *</label>
                            <input type="hidden" name="id" value="<?= $row->jumlah_siswa_id ?>">
                            <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" value="<?= $row->tahun_ajaran ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="siswa_laki_laki">Siswa Laki-Laki *</label>
                            <input type="number" name="siswa_laki_laki" class="form-control" value="<?= $row->siswa_laki_laki ?>" id="siswa_laki_laki" required>
                        </div>
                        <div class="form-group">
                            <label for="siswa_perempuan">Siswa Perempuan *</label>
                            <input type="number" name="siswa_perempuan" class="form-control" value="<?= $row->siswa_perempuan ?>" id="siswa_perempuan" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_siswa">Jumlah Siswa *</label>
                            <input type="number" name="jumlah_siswa" id="jumlah_siswa" class="form-control" value="<?= $row->jumlah_siswa ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                            <button type="reset" class="btn btn-secondary"><i class="fas fa-recycle"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->