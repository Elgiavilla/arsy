
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arsy Management - Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php $this->load->view('Front/assets')?>
  </head>
  <body>
  <?php $this->load->view('Front/navbar')?>
    <!-- END nav -->
    <br>
    <br>
    <br>
    <br>
	<section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
        <?php foreach($categories as $category){?>
          <div class="col-md-4">
          	<div class="blog-entry justify-content-end">
              <a href="<?=Base_url()?>service/c/<?=$category->category_slug?>" class="block-20" style="background-image: url('<?=Base_url()?>media/Category/<?=$category->cat_image?>');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              	
              	</div>
                <h3 class="heading"><a href="<?=Base_url()?>service/c/<?=$category->category_slug?>"><?=$category->name_category?></a></h3>
                
              </div>
            </div>
          </div>
        <?php }?>
        </div>
    <!--     <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
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