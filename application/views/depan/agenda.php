<!--============================= EVENTS =============================-->
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Agenda</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#lists-events" role="tab">Daftar Agenda </a>
                    </li>

                </ul>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="lists-events" role="tabpanel">
                    <?php foreach ($row->result() as $key => $data) { ?>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="event-date">
                                        <h4><?php echo date("d", strtotime($data->tgl_mulai)); ?></h4> <span><?php echo date("M Y", strtotime($data->tgl_mulai)); ?></span>
                                    </div>
                                    <span class="event-time"><?php echo $data->waktu; ?></span>
                                </div>
                                <div class="col-md-10">
                                    <div class="event-heading">
                                        <h3><?php echo $data->agenda; ?></h3>
                                        <p><?php echo $data->deskripsi; ?></p>
                                        <p>Lokasi: <?php echo $data->tempat; ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr class="event-underline">
                        </div>
                    <?php
                    } ?>

                    <nav><?php echo $page; ?></nav>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->