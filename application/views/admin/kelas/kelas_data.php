<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Kelas</h6>
      <div>
        <a href="<?= base_url('admin/kelas/add') ?>" class="btn btn-success mt-3">
          <i class="fas fa-pencil-alt"></i> Create
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Kelas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td width="30px"><?= $no++ ?>.</td>
                <td><?= $data->kelas ?></td>
                <td class="text-center" width="135px">
                  <a href="<?= base_url('admin/kelas/edit/') . $data->kelas_id ?>" class="badge badge-warning">
                    <i class="fas fa-edit"></i> Update
                  </a>
                  <a href="<?= base_url('admin/kelas/del/') . $data->kelas_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
                    <i class="fas fa-trash"></i> Delete
                  </a>
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