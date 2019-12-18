
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arsy Management - About us</title>
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
	<section class="ftco-section services-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Team</h2>
          </div>
        </div>
        <div class="row d-flex">
		<?php foreach($teams as $team){?>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block" style="margin:auto;">
              <a href="#" onclick="getDetail(<?=$team->id?>);return false"><div class="icon"><img style="width: 100px;"  src="<?=Base_url()?>media/Team/<?=$team->image?>"></div></a>
              <div class="media-body">
               
              </div>
            </div>      
          </div>
		<?php }?>
        </div>
      </div>
    </section>
	 <br>
    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 order-md-last d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(<?=Base_url()?>media/Settings/<?=$about_bg_image->value?>);"></div>
    			</div>
    			<div class="col-md-6 pr-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">About Us</h2>
		            <p><?=$about_description->value?></p>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    <br>
    <br>
    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(<?=Base_url()?>media/Settings/<?=$our_vision_img->value?>);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Our Vision</h2>
		            <p><?=$our_vision_desc->value?></p>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
	<br>
	<br>
    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 order-md-last d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(<?=Base_url()?>media/Settings/<?=$our_mission_img->value?>);"></div>
    			</div>
    			<div class="col-md-6 pr-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Our Mission</h2>
		            <p><?=$our_mission_desc->value?></p>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
	<br>
	<br>


    <?php $this->load->view('Front/footer')?>
    
  
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="naman">Modal Header</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p id="description"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
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
  <script>
	function getDetail(id){
		//$('#myModal').modal('show');
		$.ajax({
			url: '<?=Base_url()?>Welcome/getTeamById/'+id,
			type: 'GET',
			dataType: 'json',
			success: function(result){
				//console.log(result);
				//alert(result['name']);
				$('#naman').html(result['name']);
				$('#description').html(result['description']);
				$('#myModal').modal('show');
			}
		});
	}  
  </script>
  </body>
</html>