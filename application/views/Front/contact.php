
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arsy Management - Contact</title>
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
    <section class="ftco-section ftco-no-pb contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-4 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-marker"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p><?=$contact_address->value?></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Phone Number</h3>
	            <p><a href="#"><?=$contact_telp->value?></a></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email</h3>
	            <p><a href="mailto:<?=$contact_email->value?>"><?=$contact_email->value?></a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="<?=Base_url()?>Welcome/contactSubmit" method="POST" class="bg-light p-5 contact-form">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="company_name" placeholder="Company Name">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
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