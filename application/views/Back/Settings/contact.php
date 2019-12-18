
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php $this->load->view('Back/assets');?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('Back/navbar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <div class="container-fluid">
        <div class="row mb-2">
          <h3>Contact Settings</h3>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mobile Number</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$hp_number->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$hp_number->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>
			
			<div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Telephone Number</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$contact_telp->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$contact_telp->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>

            <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Email</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$contact_email->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$contact_email->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>

            <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Instagram Link</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$contact_ig->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$contact_ig->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>

            <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Facebook Link</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$contact_fb->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$contact_fb->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>

            <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">LinkedIn Link</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$contact_linkedin->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$contact_linkedin->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>

            <div class="col-md-4">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Address</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/settingsContact/<?=$contact_address->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" value="<?=$contact_address->value?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <center>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
              </form>
            </div>
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('Back/footer')?>
  </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=Base_url()?>assets/Back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=Base_url()?>assets/Back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?=Base_url()?>assets/Back/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=Base_url()?>assets/Back/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=Base_url()?>assets/Back/dist/js/demo.js"></script>
</body>
</html>
