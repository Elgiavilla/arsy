
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
            <a href="<?=Base_url()?>Admin/Subcategory" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
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
                <h3 class="card-title">Edit Sub Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=Base_url()?>Admin/Subcategory/update/<?=$subcategory->sub_category_id?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="category_id" class="form-control"
                          style="width: 100%;">
                      <option selected value="<?=$subcategory->category_id?>"><?=$subcategory->name_category?></option>
                      <?php foreach($categories as $category){?>
                      <option value="<?=$category->category_id?>"><?=$category->name_category?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Category Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?=$subcategory->sub_category_name?>" name="sub_category_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <br>
                    <img src="<?=Base_url()?>media/Subcategory/<?=$subcategory->sub_cat_image?>" width="80%">
                    <br>
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
</body>
</html>
