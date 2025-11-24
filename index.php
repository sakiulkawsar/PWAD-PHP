<?php include_once('inc/db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $project_URL  ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

  <div class="login-box">
    <?php
    if (isset($_POST['submit'])) {
      extract($_POST);
      $password = md5($password);

      $sql = "SELECT * FROM admins WHERE email='$email' AND `password`='$password'";
      $result = $db->query($sql);
      if ($result->num_rows > 0) {
        session_start();
        // Set session variables
        $_SESSION['loggedIn'] = true;
        $_SESSION['Message'] = "logged in successfully";

        // Set session expiration time (in seconds)
        $session_duration = 30 * 60; // 30 minutes
        $_SESSION['expire_time'] = time() + $session_duration;

        header("Location: AdminHome.php");
      } else {
        echo "<div class='alert alert-danger'>Invalid Email or Password</div>";
      }
    }
    ?>

    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?php echo $project_URL  ?>index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="index.php" method="POST">

          <!-- Email -->
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <!-- Password -->
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <!-- Remember Me -->
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>


        </form>

        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>