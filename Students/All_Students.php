<?php include_once('../inc/db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $project_URL  ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $project_URL  ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include('../inc/Top_Navbar.php'); ?>

    <?php include('../inc/Main_Sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>All Students Data</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">All Students</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <?php
              session_start();
              if (isset($_SESSION['Message'])) {
                echo '<div class="alert alert-success" role="alert" >' . $_SESSION['Message'] . '</div>';
                unset($_SESSION['Message']);
              };

              ?>

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Students Data Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Notes</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $sql = "SELECT * FROM students";
                      $result = $db->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                      ?>
                          <tr>
                            <td><?php echo $row['employeeID'] ?></td>
                            <td><?php echo $row['first_name'] ?></td>
                            <td><?php echo $row['last_name'] ?></td>
                            <td style="width: 120px;"><?php echo $row['birthdate'] ?></td>
                            <td style="width: 400px;"><?php echo $row['notes'] ?></td>
                            <td>
                              <a href="Edit_Student.php?id=<?php echo $row['employeeID']; ?>"
                                class="btn btn-primary btn-sm"
                                title="Edit">
                                <i class="fa fa-edit"></i>
                              </a>

                              <a href="delete_student.php?id=<?php echo $row['employeeID']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this student?');"
                                title="Delete">
                                <i class="fa fa-trash"></i>
                              </a>
                            </td>
                          </tr>
                      <?php }
                      } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Notes</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <?php include('../inc/Footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo $project_URL  ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $project_URL  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo $project_URL  ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/jszip/jszip.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo $project_URL  ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $project_URL  ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="<?php echo $project_URL  ?>dist/js/demo.js"></script> -->
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>