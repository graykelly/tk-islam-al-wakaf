<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold"><?= ucfirst($page); ?> Data Kelas</h6>
      <div>
        <a href="<?= base_url('admin/kelas') ?>" class="btn btn-warning mt-3">
          <i class="fas fa-undo"></i> Back
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <?php echo form_open_multipart('admin/kelas/process') ?>
          <div class="form-group">
            <label for="kelas">Kelas *</label>
            <input type="hidden" name="id" value="<?= $row->kelas_id ?>">
            <input type="text" name="kelas" value="<?= $row->kelas ?>" class="form-control" required>
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