<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Users</h6>
      <div>
        <a href="<?= base_url('admin/user/add') ?>" class="btn btn-success mt-3">
          <i class="fas fa-user-plus"></i> Create
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->username ?></td>
                <td><?= $data->name ?></td>
                <td><?= $data->email ?></td>
                <td><?= $data->level == 1 ? "Admin" : "" ?></td>
                <td class="text-center" width="160">
                  <form action="<?= base_url('admin/user/del') ?>" method="post">
                    <a href="<?= base_url('admin/user/edit/') . $data->user_id ?>" class="badge badge-warning">
                      <i class="fas fa-edit"></i> Update
                    </a>
                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                    <button onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
                      <i class="fas fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            <?php
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->