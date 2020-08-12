<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Inbox</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No.Telepon</th>
              <th>Pesan</th>
              <th>Tanggal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->nama ?></td>
                <td><?= $data->email ?></td>
                <td><?= $data->no_telp ?></td>
                <td><?= $data->pesan ?></td>
                <td><?= indo_date($data->tanggal) ?></td>
                <td class="text-center" width="135px">
                  <a href="<?= base_url('admin/inbox/del/') . $data->inbox_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
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