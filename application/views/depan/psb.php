<!--============================= INFO PSB =============================-->
<section class="info_psb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php foreach ($row->result() as $key => $data) { ?>
                <div style="margin-top:20px">
                    <img src="<?= base_url('assets/images/psb/' . $data->gambar) ?>" width="100%">
                </div>
                    </div>
                    <div class="col-md-8">
                    <h2 style="margin-top:12px">Cara Daftar</h2>
                    <p>Sebelum memulai proses pendaftaran dan agar Ayah Bunda dapat mengetahui profil kami secara sekilas, mohon Ayah Bunda dapat meluangkan waktunya untuk membaca profil sekolah kami, profil para pendidik dan tenaga kependidikan kami, profil pengurus, kegiatan belajar kami.</p>

                    <p><?= $data->keterangan ?></p>

                    <h2>Persyaratan</h2>
                    <p><?= $data->persyaratan ?></p>

                    <h2>Tanggal Daftar</h2>
                    <p><?= $data->tanggal ?></p>
                    <?php 
                } ?>
                </div>
            </div>
        </div>
    </section>
    <!--//END INFO PSB -->