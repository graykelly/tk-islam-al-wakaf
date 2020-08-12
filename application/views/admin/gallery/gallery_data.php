<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold">Data Gallery</h6>
      <div>
        <a href="<?= base_url('admin/gallery/add') ?>" class="btn btn-success mt-3">
          <i class="fas fa-camera"></i> Create
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="8px">#</th>
              <th>Foto</th>
              <th>Judul</th>
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
                <td class="text-center">
                  <?php if ($data->foto != null) { ?>
                    <img src="<?= base_url('assets/images/gallery/' . $data->foto) ?>" style="width:100px">
                  <?php
                  } ?>
                </td>
                <td><?= $data->judul ?></td>
                <td><?= indo_date($data->tanggal) ?></td>
                <td class="text-center" width="135px">
                  <a href="<?= base_url('admin/gallery/edit/') . $data->gallery_id ?>" class="badge badge-warning">
                    <i class="fas fa-edit"></i> Update
                  </a>
                  <a href="<?= base_url('admin/gallery/del/') . $data->gallery_id ?>" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">
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