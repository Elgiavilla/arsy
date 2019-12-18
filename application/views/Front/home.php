
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php $this->load->view('Front/assets');?>
  </head>
  <body>

    <?php $this->load->view('Front/navbar')?>  
    
    <div class="hero-wrap js-fullheight" style="background-color: #fff" data-stellar-background-ratio="0.5">
      
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end mt-5" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <hr style="visibility: hidden;">
            <h2 class="mb-4 homeheader" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" >WE ARE YOUR EVENT PARTNER</h2>
            <img src="<?=base_url()?>assets/Front/images/pohon.png" width="100%">
            <h2 class="mb-4 homeheader" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="text-align: right;">IDEAS - UNIQUE- MEANINGFULL EXPERIENCES</h2>
            <hr style="visibility: hidden;">
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <?php foreach($articles as $article){?>
		  <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="<?=Base_url()?>article/detail/<?=$article->slug?>" class="block-20" width="100%" style="background-image: url('<?=Base_url()?>media/Article/<?=$article->image?>');">
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center pt-2 mb-4 topp">
                  <div class="one">
                    <span class="day"><?=date('d', strtotime($article->date_posted))?></span>
                  </div>
                  <div class="two">
                    <span class="yr"><?=date('Y', strtotime($article->date_posted))?></span>
                    <span class="mos"><?=date('F', strtotime($article->date_posted))?></span>
                  </div>
                </div>
                <h3 class="heading"><a href="<?=Base_url()?>article/detail/<?=$article->slug?>"><?=$article->title?></a></h3>
              </div>
            </div>
          </div>
		  <?php }?>
        </div>
		  <center>
		  	<h4><a href="<?=Base_url()?>articles" class="btn btn-primary">More Blog</a></h4>
		  </center>
      </div>
    </section>
<!--     <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Layanan Kami</h2>
            
          </div>
        </div>
    		<div class="row">
            <?php foreach($categories as $category){?>
    			<div class="col-md-4">
    				<div class="project">
    					<div class="img">
		    				<img src="<?=Base_url()?>media/Category/<?=$category->cat_image?>" class="img-fluid" alt="<?=$category->name_category?>" width="100%">
	    				</div>
	    				<div class="text">
	    					
	    					
	    					<h3><a href="<?=Base_url()?>service/c/<?=$category->category_slug?>"><?=$category->name_category?></a></h3>
	    					
	    				</div>
	    				<a href="<?=Base_url()?>media/Category/<?=$category->cat_image?>" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
            <?php }?>
    		</div>
    	</div>
    </section> -->

<!--     <section class="ftco-section ftco-no-pb testimony-section">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Testimonial</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12 testimonial">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <?php foreach($testimonials as $testimony){?>
              <div class="item">
                <div class="testimony-wrap" style="background-image: url(<?=Base_url()?>media/Testimony/<?=$testimony->image?>);">
                	<div class="overlay"></div>
                  <div class="text">
                    <p class="mb-4"><?=$testimony->testimony?></p>
                    <p class="name"><?=$testimony->name?></p>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br> -->
    <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Klien Kami</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">February</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">February</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">February</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
		  <!-- <section class="ftco-section services-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Partner Kami</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block" style="margin:auto;">
              <div class="icon"><img style="width: 100px;"  src="images/Hotel_Ibis_logo_2012.png"></div>
              <div class="media-body">
               
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block" style="margin:auto;">
              <div class="icon"><img style="width: 100px;"  src="images/Hotel_Ibis_logo_2012.png"></div>
              <div class="media-body">
               
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block" style="margin:auto;">
              <div class="icon"><img style="width: 100px;"  src="images/Hotel_Ibis_logo_2012.png"></div>
              <div class="media-body">
               
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block" style="margin:auto;">
              <div class="icon"><img style="width: 100px;" src="images/Hotel_Ibis_logo_2012.png"></div>
              <div class="media-body">
                
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section> -->
		


    <?php $this->load->view('Front/footer')?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=Base_url()?>assets/Front/js/jquery.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/popper.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/bootstrap.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/jquery.easing.1.3.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/jquery.waypoints.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/jquery.stellar.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/owl.carousel.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/aos.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/jquery.animateNumber.min.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/bootstrap-datepicker.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=Base_url()?>assets/Front/js/google-map.js"></script>
  <script src="<?=Base_url()?>assets/Front/js/main.js"></script>
    
  </body>
</html>