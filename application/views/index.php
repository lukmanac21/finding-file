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
                      <span class="category"><?php echo $rowSlider->nama_kategori; ?></span>
                    </div>
                    <h3><?php echo $rowSlider->title_slider; ?></h3>
                  </div>
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo base_url(); ?>assets/images/img_2.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo base_url(); ?>assets/images/img_3.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo base_url(); ?>assets/images/img_4.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>
    <?php $this->load->view("_partials/footer.php");?>
    <?php $this->load->view("_partials/js.php"); ?>
</body>
</html>