<section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Guru Kami</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($row->result() as $key => $data) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="admission_insruction">
                          <?php if (empty($data->foto)) : ?>
                            <img src="<?php echo base_url() . 'assets/images/blank.png'; ?>" class="img-fluid" alt="#">
                          <?php else : ?>
                            <img src="<?php echo base_url() . 'assets/images/guru/' . $data->foto; ?>" class="img-fluid" alt="#">
                          <?php endif; ?>
                            <p class="text-center mt-3"><span><?php echo $data->nama; ?></span>
                                <br>
                                <?php echo $data->email; ?></p>
                        </div>
                    </div>
                    <?php 
                } ?>
              </div>
            <!-- End row -->
            <nav><?php echo $page; ?></nav>
        </div>
    </section>