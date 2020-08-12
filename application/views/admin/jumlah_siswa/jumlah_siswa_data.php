<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Jumlah Siswa</h6>
      <div>
        <a href="<?= base_url('admin/jumlah_siswa/add') ?>" class="btn btn-success mt-3">
          <i class="fas fa-user-graduate"></i> Create
        </a>
        <a href="<?= base_url('admin/jumlah_siswa/cetak') ?>" target="_blank" class="btn badge-light mt-3">
          <i class="fas fa-print"></i> Print
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Tahun Ajaran</th>
              <th>Siswa Laki-Laki</th>
              <th>Siswa Perempuan</th>
              <th>Jumlah Siswa</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($row->result() as $key => $data) { ?>
              <tr>
                <td><?= $no++ ?>.</td>
                <td class="text-center"><?= $data->tahun_ajaran ?></td>
                <td class="text-center"><?= $data->siswa_laki_laki ?></td>
                <td class="text-center"><?= $data->siswa_perempuan ?></td>
                <td class="text-center"><?= $data->jumlah_siswa ?></td>
                <td class="text-center" width="160px">
                  <a href="<?= base_url('admin/jumlah_siswa/edit/') . $data->jumlah_siswa_id ?>" class="badge badge-warning">
                    <i class="fas fa-edit"></i> Update
                  </a>
                  <a href="<?= base_url('admin/jumlah_siswa/del/') . $data->jumlah_siswa_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
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