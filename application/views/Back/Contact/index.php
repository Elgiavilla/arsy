
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Inbox</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1%">#</th>
                  <th width="20%">Name</th>
                  <th width="20%">Email</th>
                  <th width="20%">Phone Number</th>
                  <th width="20%">Company Name</th>
                  <th width="25%">Date</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($contacts as $contact){?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$contact->name?></td>
                        <td><?=$contact->email?></td>
                        <td><?=$contact->phone_number?></td>
                        <td><?=$contact->company_name?></td>
                        <td><?=date('d M Y', strtotime($contact->tanggal))?></td>
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
</script>
</body>
</html>
