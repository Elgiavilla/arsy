
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arsy Organizer - <?=$article->title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php $this->load->view('Front/assets')?>
  </head>
  <body>
	  <?php $this->load->view('Front/navbar')?>
    <!-- END nav -->
		<br>
		<section class="ftco-section">
      <div class="container">
		  <br><br><br>
		<div class="col-md-12">
			<center><img src="<?=Base_url()?>media/Article/<?=$article->image?>" alt="" class="img-fluid" width="50%"></center>
		</div>
		  <br>
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
            <h2 class="mb-3"><?=$article->title?></h2>
            <?=$article->content?>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
			<?php foreach($articles as $article){?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?=Base_url()?>media/Article/<?=$article->image?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?=Base_url()?>article/detail/<?=$article->slug?>"><?=$article->title?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?=date('F d, Y', strtotime($article->date_posted))?></a></div>
                  </div>
                </div>
              </div>
				<?php }?>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

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