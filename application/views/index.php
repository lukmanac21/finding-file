<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view("_partials/head.php");?>
<body>
    <?php $this->load->view("_partials/navbar.php");?>
    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme home-slider">
            <?php foreach($slider as $rowSlider) { ?> 
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo base_url(); ?>assets/images/<?php echo $rowSlider->img_slider;?>'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category"><?php echo $rowSlider->title_slider; ?></span>
                    </div>
                    <h3><?php echo $rowSlider->ket_slider; ?></h3>
                  </div>
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
        <?php foreach($event as $rowEvent) { ?> 
          <div class="col-md-6 col-lg-6">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo base_url(); ?>assets/images/<?php echo $rowEvent->banner_event?>'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category"><?php echo $rowEvent->nama_kategori ;?></span>
                  <span class="mr-2"><?php echo $rowEvent->tanggal_event;?></span> &bullet;
                  <span class="ml-2"><?php echo $rowEvent->nama_ruang ;?> </span>
                </div>
                <h3><?php echo $rowEvent->nama_event ;?></h3>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>


    </section>
    <?php $this->load->view("_partials/footer.php");?>
    <?php $this->load->view("_partials/js.php"); ?>
</body>
</html>