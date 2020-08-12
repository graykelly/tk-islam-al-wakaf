<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"><?= ucfirst($page); ?> Data Profile</h6>
            <div>
                <a href="<?= base_url('admin/profile') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= base_url('admin/profile/process') ?>" method="post">
                        <div class="form-group">
                            <label>Profile *</label>
                            <input type="hidden" name="id" value="<?= $row->profile_id ?>">
                            <textarea style="height:100%" name="profile" class="ckeditor" required><?= $row->profile ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Visi *</label>
                            <textarea style="height:200px" name="visi" class="ckeditor" required><?= $row->visi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Misi *</label>
                            <textarea style="height:200px" name="misi" class="ckeditor" required><?= $row->misi ?></textarea>
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