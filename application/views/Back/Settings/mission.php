
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
          <h3>Vision and Mission Settings</h3>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vision</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/editVision/<?=$our_vision_desc->element_id?>/<?=$our_vision_img->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="text"><?=$our_vision_desc->value?></textarea>
                  </div>
                  <img src="<?=Base_url()?>media/Settings/<?=$our_vision_img->value?>" width=50%>
                  <br><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image">
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

            <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mission</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Settings/editVision/<?=$our_mission_desc->element_id?>/<?=$our_mission_img->element_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" id="description1" rows="3" name="text"><?=$our_mission_desc->value?></textarea>
                  </div>
                  <img src="<?=Base_url()?>media/Settings/<?=$our_mission_img->value?>" width=50%>
                  <br><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image">
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
<script src="<?=Base_url()?>assets/Back/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('description');
    CKEDITOR.replace('description1');
  })
</script>
</body>
</html>
