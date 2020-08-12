<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Add Data User</h6>
            <div>
                <a href="<?= base_url('admin/user') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <form action="<?= base_url('admin/user/add') ?>" method="post">
                        <div class="form-group">
                            <label for="fullname">Name *</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" value="<?= set_value('fullname') ?>">
                            <small class="text-danger"><?= form_error('fullname') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username *</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username') ?>">
                            <small class="text-danger"><?= form_error('username') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password *</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?= set_value('password') ?>">
                            <small class="text-danger"><?= form_error('password') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="passconf">Password Confirmation *</label>
                            <input type="password" name="passconf" id="passconf" class="form-control" value="<?= set_value('passconf') ?>">
                            <small class="text-danger"><?= form_error('passconf') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= set_value('email') ?>">
                            <small class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="level">Level *</label>
                            <select name="level" id="level" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
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