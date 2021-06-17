<body class="hold-transition login-page" style="background-color: #151515;">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color: #fff;"><b>Admin </b>Company Profile BWA</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="background-color: #222831; border-radius: 4px;">
      <p class="login-box-msg" style="color: #fff;">Sign in to start your session</p>
      <?php if (!empty($_GET['notif'])) { ?>
         <?php if ($_GET['notif']=="userKosong") { ?>
                <span class="text-danger">
                  Maaf username tidak boleh Kosong
                </span>
          <?php } elseif ($_GET['notif']=="passKosong") { ?>
                <span class="text-danger">
                  Maaf password tidak boleh Kosong
                </span>
           <?php } else { ?>
                <span class="text-danger">
                  Maaf username dan password anda salah
                </span>
           <?php } ?>
        <?php } ?>
      <form action="konfirmasi-login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" style="background-color: #3c415c; color:#fff;" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" style="background-color: #3c415c; color:#fff;" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  name="login" value="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php include("includes/script.php") ?>
</body>