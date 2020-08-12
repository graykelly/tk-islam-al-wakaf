<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"><?= ucfirst($page); ?> Data Agenda</h6>
            <div>
                <a href="<?= base_url('admin/agenda') ?>" class="btn btn-warning mt-3">
                    <i class="fas fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('admin/agenda/process') ?>" method="post">
                        <div class="form-group">
                            <label for="agenda">Nama Agenda *</label>
                            <input type="hidden" name="id" value="<?= $row->agenda_id ?>">
                            <input type="text" name="agenda" id="agenda" class="form-control" value="<?= $row->agenda ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi *</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" required><?= $row->deskripsi ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tgl_mulai">Mulai <i class="fas fa-calendar-alt"></i> *</label>
                            <input type="text" name="tgl_mulai" class="form-control pull-right" value="<?= $row->tgl_mulai ?>" id="datepicker" required>
                        </div>
                        <div class="form-group">
                            <label>Selesai <i class="fas fa-calendar-alt"></i> *</label>
                            <input type="text" name="tgl_selesai" class="form-control pull-right" value="<?= $row->tgl_selesai ?>" id="datepicker2" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat *</label>
                            <input type="text" name="tempat" id="tempat" class="form-control" value="<?= $row->tempat ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu *</label>
                            <input type="text" name="waktu" id="waktu" class="form-control" value="<?= $row->waktu ?>" placeholder="Contoh: 10.30-11.00 WIB" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan *</label>
                            <textarea name="keterangan" id="keterangan" class="form-control" rows="2" required><?= $row->keterangan ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
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