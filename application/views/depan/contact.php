<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="nama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Phone" name="no_telp" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="pesan" required rows="5"></textarea>
                                    </div>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                    <div><?php echo $this->session->flashdata('message'); ?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Jl. Sinyar 7 RT 06/09 No. 28,
                                        <br> Kel. Duri Pulo, Kec. Gambir, Jakarta Pusat
                                        <br> INA. 10140</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h6>Email</h6>
                                    <p>tk-islam-al-wakaf@gmail.com</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h6>Telp.</h6>
                                    <p>+62 821 2197 0603</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="contact-center">OR</p>
            </div>
        </div>
    </div>
</section>