<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Guru</h6>
      <div>
        <a href="<?= base_url('admin/guru/add') ?>" class="btn btn-success mt-3">
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
              <th>NIP</th>
              <th>Nama</th>
              <th>JK</th>
              <th>TTL</th>
              <th>Alamat</th>
              <th>No_telp</th>
              <th>Email</th>
              <th>Kelas</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td><?= $no++ ?>.</td>
                <td><?= $data->nip ?></td>
                <td><?= $data->nama ?></td>
                <td class="text-center"><?= $data->jk ?></td>
                <td><?= $data->tmp_tgl_lahir ?></td>
                <td><?= $data->alamat ?></td>
                <td><?= $data->no_telp ?></td>
                <td><?= $data->email ?></td>
                <td class="text-center"><?= $data->kelas_id ?></td>
                <td>
                  <?php if ($data->foto != null) { ?>
                    <img src="<?= base_url('assets/images/guru/' . $data->foto) ?>" style="width:100px">
                  <?php
                  } ?>
                </td>
                <td class="text-center" width="135px">
                  <a href="<?= base_url('admin/guru/edit/') . $data->guru_id ?>" class="badge badge-warning">
                    <i class="fas fa-edit"></i> Update
                  </a>
                  <a href="<?= base_url('admin/guru/del/') . $data->guru_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
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