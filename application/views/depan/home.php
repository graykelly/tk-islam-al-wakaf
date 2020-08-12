<!--============================= SLIDER =============================-->
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?= base_url('assets/images/slide/1-0.jpg'); ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?= base_url('assets/images/slide/1-1.jpg'); ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?= base_url('assets/images/slide/1-2.jpg'); ?>" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome</h2>
                <p>Kami Menyambut baik terbitnya Website TK ISLAM AL-WAKAF yang baru , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url() . 'theme/images/welcome.png' ?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->


<!--============================= EVENTS =============================-->
<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Agenda</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php foreach ($row->result() as $data) { ?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($data->tgl_mulai)); ?></p>
                                <span><?php echo date("M Y", strtotime($data->tgl_mulai)); ?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $data->agenda; ?></a></h3>
                            <p><?php echo limit_words($data->deskripsi, 25) . '...'; ?></p>
                            <hr class="event_line">
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
</section>

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