<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Edit Data User</h6>
            <div>
                <a href="<?= base_url('admin/user') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" name="fullname" class="form-control" value="<?= $this->input->post('fullname') ?? $row->name ?>">
                            <small class="text-danger"><?= form_error('fullname') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Username *</label>
                            <input type="text" name="username" class="form-control" value="<?= $this->input->post('username') ?? $row->username ?>">
                            <small class="text-danger"><?= form_error('username') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label><small class="text-danger"> (biarkan kosong, jika tidak ingin ganti password)</small>
                            <input type="password" name="password" class="form-control" value="<?= $this->input->post('password') ?>">
                            <small class="text-danger"><?= form_error('password') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" name="passconf" class="form-control" value="<?= $this->input->post('passconf') ?>">
                            <small class="text-danger"><?= form_error('passconf') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" value="<?= $this->input->post('email') ?? $row->email ?>">
                            <small class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Level *</label>
                            <select name="level" class="form-control">
                                <?= $level = $this->input->post('level') ? $this->input->post('fullname') : $row->level ?>
                                <option value="1">Admin</option>
                            </select>
                            <small class="text-danger"><?= form_error('level') ?></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
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