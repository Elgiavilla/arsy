
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arsy Management - <?=$service->service_name?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $this->load->view('Front/assets');?>
</head>
<body>
  <?php $this->load->view('Front/navbar')?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?=Base_url()?>media/Service/<?=$service->service_image?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread" style="color:white !important"><?=$service->service_name?></h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="<?=Base_url()?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="<?=Base_url()?>service/c/<?=$service->category_slug?>"><?=$service->name_category?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?=$service->service_name?></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 order-md-last ftco-animate" style="text-align: center;">
          
          <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Itenerary</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Location</a>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" style="text-align: justify;">
                <br>
                <?=$service->description?>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="text-align: justify;">
                <br>
                <?=$service->itenary?>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" style="text-align: justify;">
                <br>
                <?=$service->location?>
            </div>
          </div>
        </div> <!-- .col-md-8 -->

      </div>
    </div>
  </section> <!-- .section -->
  <section class="ftco-section contact-section">
      <div class="container">
      <h2 class="mb-3">Registrasi</h2>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="<?=Base_url()?>Welcome/contactService/<?=$service->service_slug?>" method="POST" class="bg-light p-5 contact-form">
              <div class="form-group">
              <input type="hidden" name="service_id" value="<?=$service->service_id?>" class="form-control" placeholder="Nama">
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