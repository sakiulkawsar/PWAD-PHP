<?php include_once('../inc/db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>/dist/css/adminlte.min.css">
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
              <h1>Edit Student</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit Student</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Student</h3>

                </div>

                <?php
                if (isset($_GET['id'])) {
                  $id = $_GET['id'];
                  $sql = "SELECT * FROM students WHERE employeeID = $id";
                  $result = $db->query($sql);
                  $student = $result->fetch_assoc();
                }

                if (isset($_POST['submit'])) {

                  extract($_POST);

                  $sql = "UPDATE students SET  first_name = '$first_name', last_name  = '$last_name', birthdate  = '$birth_date', notes = '$note' WHERE employeeID = $id";

                  $result = $db->query($sql);

                  if ($db->affected_rows > 0) {
                    session_start();
                    $_SESSION['Message'] = "Student updated successfully!";
                    header("Location: All_Students.php");
                  } else {
                    echo "<div class='alert alert-danger'>Failed to update student</div>";
                  }
                }
                ?>

                <!-- form start -->
                <form id="quickForm" action="" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label>First Name</label>
                      <input
                        type="text"
                        name="first_name"
                        class="form-control"
                        value="<?php echo $student['first_name'];  ?>"
                        placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input
                        type="text"
                        name="last_name"
                        class="form-control"
                        value="<?php echo $student['last_name'] ?>"
                        placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                      <label>Birth Date</label>
                      <input
                        type="date"
                        name="birth_date"
                        value="<?php echo $student['birthdate'];  ?>"
                        class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Note</label>
                      <textarea name="note" class="form-control" rows="3"><?php echo trim($student['notes']); ?></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>

    <!-- Footer -->
    <?php include('../inc/Footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jquery-validation -->
  <script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <!-- <script>
    $(function() {
      $.validator.setDefaults({
        submitHandler: function() {
          alert("Form successful submitted!");
        }
      });
      $('#quickForm').validate({
        rules: {
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
            minlength: 5
          },
          terms: {
            required: true
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script> -->
</body>

</html>