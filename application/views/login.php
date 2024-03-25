<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Ojek Online</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>SI</b> Ojek Online</a>
        </div>
        <div class="col-lg-12">
        <?php if($this->session->flashdata("gagal")){?>
          <div class="alert alert-danger" role="alert">
          <?= $this->session->flashdata("gagal"); }?>
          <?php if($this->session->flashdata("berhasil")){?>
          <div class="alert alert-success" role="alert">
          <?= $this->session->flashdata("berhasil"); }?>
          </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Form Login</p>
                
                <form action="<?=base_url("auth/login")?>" method="post">
                    <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-8"></div>
          <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
              <!-- /.col -->
        </div>
    </form>
      <p class="mt-3">
        <a href="<?= base_url("auth/pendaftaran")?>" class="text-center">Belum punya akun?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
  <div class="col-12 text-center mt-2">
    <a href="<?= base_url("auth/pendaftaran")?>">Yuk jadi ojek online...</a>
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
