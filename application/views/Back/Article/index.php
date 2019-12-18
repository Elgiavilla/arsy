
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arsy Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- DataTables -->
  <!-- Font Awesome -->
  <?php $this->load->view('Back/assets');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('Back/navbar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="<?=Base_url()?>Admin/Article/add" class="btn btn-primary btn-lg">Add New Article</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Articles</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1%">#</th>
                  <th width="35%">Title</th>
				   <th width="35%">Excerpt</th>
                  <th width="25%">Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($articles as $article){?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$article->title?></td>
						<td><?=$article->content?></td>
                        <td><img src="<?=Base_url()?>media/Article/<?=$article->image?>" width="80%"></td>
                        <td>
                            <a href="#" onclick="getById(<?=$article->id?>); return false" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <a href="#" onclick="getDelete(<?=$article->id?>); return false" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('Back/footer');?>
  </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=Base_url()?>assets/Back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=Base_url()?>assets/Back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?=Base_url()?>assets/Back/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=Base_url()?>assets/Back/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="<?=Base_url()?>assets/Back/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=Base_url()?>assets/Back/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=Base_url()?>assets/Back/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=Base_url()?>assets/Back/dist/js/demo.js"></script>
<script src="<?=Base_url()?>assets/Back/swal/swal_new.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
  function getDelete(id)
  {
     swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url : '<?=Base_url()?>Admin/Article/delete/'+id,
          success : function(response){
            swal({
              title: 'Success!',
              text: response,
              icon: 'success'
            }).then(function() {
              location.reload();
            });
          }
        });
      } else {
        swal("You canceled delete category!");
      }
    });
  }

  function getById(id)
  {
     swal({
      title: "Are you sure?",
      text: "If you click OK you'll update this service",
      icon: "warning",
      buttons: true,
      dangerMode: false,
    })
    .then((willDelete) => {
      if (willDelete) {
        location.href = '<?=Base_url()?>Admin/Article/edit/'+id;
      } else {
        swal("You canceled update service!");
      }
    });
  }
</script>
</body>
</html>
