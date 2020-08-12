<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php foreach ($row->result() as $key => $data) { ?>

                <h2 class="text-center">Profile TK ISLAM AL-WAKAF</h2>
                <p>
                    <?= $data->profile ?>
                </p>
                <h2 class="text-center">Visi</h2>
                <p>
                    <?= $data->visi ?>
                </p>
                <h2 class="text-center">Misi</h2>
                <p>
                    <?= $data->misi ?>
                </p>
                </div>
                    <?php 
                } ?>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->


<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_1.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_3.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_agenda; ?></span> Agenda
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_4.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_gallery; ?></span> Gallery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//END DETAILED CHART -->
