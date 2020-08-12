<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"><?= ucfirst($page); ?> Data Guru</h6>
            <div>
                <a href="<?= base_url('admin/guru') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?php echo form_open_multipart('admin/guru/process') ?>
                    <div class="form-group">
                        <label for="nip">NIP *</label>
                        <input type="hidden" name="id" value="<?= $row->guru_id ?>">
                        <input type="text" name="nip" id="nip" value="<?= $row->nip ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama *</label>
                        <input type="text" name="nama" id="nama" value="<?= $row->nama ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin *</label>
                        <select name="jk" id="jk" class="form-control" required>
                            <?php
                            if ($row->jk == 'L') {
                            ?>
                                <option value="L" selected>Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            <?php
                            } elseif ($row->jk == 'P') {
                            ?>
                                <option value="L">Laki-Laki</option>
                                <option value="P" selected>Perempuan</option>
                            <?php
                            } else {
                            ?>
                                <option value="">- Pilih -</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tmp_tgl_lahir">Tempat/Tgl Lahir *</label>
                        <input type="text" name="tmp_tgl_lahir" id="tmp_tgl_lahir" value="<?= $row->tmp_tgl_lahir ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat *</label>
                        <input type="text" name="alamat" id="alamat" value="<?= $row->alamat ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No.Telepon *</label>
                        <input type="number" name="no_telp" id="no_telp" value="<?= $row->no_telp ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" name="email" id="email" value="<?= $row->email ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas *</label>
                        <select name="kelas" id="kelas" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($kelas->result() as $key => $data) { ?>
                                <option value="<?= $data->kelas_id ?>" <?= $data->kelas_id == $row->kelas_id ? "selected" : null ?>> <?= $data->kelas ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto *</label>
                        <?php if ($page == 'edit') {
                            if ($row->foto != null) { ?>
                                <div style="margin-bottom:8px">
                                    <img src="<?= base_url('assets/images/guru/' . $row->foto) ?>" style="width:30%">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="foto" id="foto" class="form-control">
                        <small>(Foto biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="<?= $page ?>" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-secondary"><i class="fas fa-recycle"></i> Reset</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->