
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
          <div class="col-sm-6">
            <a href="<?=Base_url()?>Admin/Service" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
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
                <h3 class="card-title">Add New Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Service/insert" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select class="form-control" name="category_id">
						<option></option>
						<?php foreach($categories as $category){?>
						<option value="<?=$category->category_id?>"><?=$category->name_category?></option>
						<?php }?>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Service Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="service_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Itenary</label>
                    <textarea class="form-control" id="itenary" rows="3" name="itenary"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <textarea class="form-control" id="location" rows="3" name="location"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <br>
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
            <!-- /.card -->
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
    CKEDITOR.replace('itenary');
    CKEDITOR.replace('location');
  })
</script>
</body>
</html>
