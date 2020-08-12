<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"><?= ucfirst($page); ?> Data PSB</h6>
            <div>
                <a href="<?= base_url('admin/psb') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?php echo form_open_multipart('admin/psb/process') ?>
                    <div class="form-group">
                        <label>Keterangan *</label>
                        <input type="hidden" name="id" value="<?= $row->psb_id ?>">
                        <textarea style="height:100%" name="keterangan" class="ckeditor" required><?= $row->keterangan ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Persyaratan *</label>
                        <textarea style="height:200px" name="persyaratan" class="ckeditor" required><?= $row->persyaratan ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal *</label>
                        <input type="text" name="tanggal" class="form-control" value="<?= $this->input->post('tanggal') ?? $row->tanggal ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar *</label>
                        <?php if ($page == 'edit') {
                            if ($row->gambar != null) { ?>
                                <div style="margin-bottom:8px">
                                    <img src="<?= base_url('assets/images/psb/' . $row->gambar) ?>" style="width:30%">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="gambar" class="form-control">
                        <small>(Gambar biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
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