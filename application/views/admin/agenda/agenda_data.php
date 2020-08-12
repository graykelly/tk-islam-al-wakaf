<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Agenda</h6>
      <div>
        <a href="<?= base_url('admin/agenda/add') ?>" class="btn btn-success mt-3">
          <i class="fas fa-calendar-alt"></i> Create
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Agenda</th>
              <th>Tanggal</th>
              <th>Tempat</th>
              <th>Waktu</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->agenda ?></td>
                <td><?= indo_date($data->tgl_mulai) . ' s/d ' . indo_date($data->tgl_selesai) ?></td>
                <td><?= $data->tempat ?></td>
                <td><?= $data->waktu ?></td>
                <td class="text-center" width="160px">
                  <a href="<?= base_url('admin/agenda/edit/') . $data->agenda_id ?>" class="badge badge-warning">
                    <i class="fas fa-edit"></i> Update
                  </a>
                  <a href="<?= base_url('admin/agenda/del/') . $data->agenda_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
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