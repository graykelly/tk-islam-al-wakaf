<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Profile</h6>
      <!-- <div>
        <a href="<?= base_url('admin/profile/add') ?>" class="btn btn-success mt-3">
            <i class="fas fa-user-plus"></i> Create
        </a>
    </div>   -->
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Profile</th>
              <th>Visi</th>
              <th>Misi</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->profile ?></td>
                <td><?= $data->visi ?></td>
                <td><?= $data->misi ?></td>
                <td class="text-center" width="135px">
                  <a href="<?= base_url('admin/profile/edit/') . $data->profile_id ?>" class="badge badge-warning">
                    <i class="fas fa-edit"></i> Update
                  </a>
                  <!-- <a href="<?= base_url('admin/profile/del/') . $data->profile_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
                <i class="fas fa-trash"></i> Delete
              </a> -->
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