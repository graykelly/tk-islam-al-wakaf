<!--============================= Gallery =============================-->
<div class="gallery-wrap">
  <div class="container">
    <!-- Style 2 -->
    <div class="row">
      <div class="col-md-12">
        <h2 class="gallery-style">Gallery Photos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="gallery-row">
          <div class="gallery-items">
            <?php foreach ($row->result() as $key => $data) { ?>
              <a href="<?php echo base_url() . 'assets/images/gallery/' . $data->foto; ?>" class="image-link2">
                <img src="<?php echo base_url() . 'assets/images/gallery/' . $data->foto; ?>" class="all img-fluid" alt="#" />
              </a>
            <?php
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<nav>
  <?php echo $page; ?>
</nav>
<br><br><br><br>
<!--//End Gallery -->