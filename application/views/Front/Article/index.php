
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php $this->load->view('Front/assets');?>
  </head>
  <body>

    <?php $this->load->view('Front/navbar')?>  
    
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
		 <?=$pagination?>
      </div>
    </section>
		


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