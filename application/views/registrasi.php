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
    <a href="../../index2.html"><b>Pendaftaran</b> Pelanggan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Form Pendaftaran</p>

      <form id="daftar" action="<?= base_url("auth/proses_daftar")?>" method="post">
          <label for="fullname">Full name</label>
          <div class="mb-3" id="v_fullname">
              <input type="text" id="fullname" class="form-control" name="fullname" required>
          </div>
        <label for="username">Username</label>
        <div class="mb-3" id="v_username">
          <input type="text" id="username" class="form-control" name="username" required>
        </div>
        <label for="username">No. Telp</label>
        <div class="mb-3" id="v_notelp">
          <input type="text" id="notelp" class="form-control" name="notelp" required>
        </div>
        <label for="password">Password</label>
        <div class="mb-3" id="v_password">
          <input type="password" id="password" class="form-control" name="password" required>
        </div>
        <label for="konfirmasi">Konfirmasi Password</label>
        <div class="mb-3" id="v_konfirmasi">
          <input type="password" id="konfirmasi" class="form-control" name="password" required>
        </div>
    </form>
    <div class="row">
      <!-- /.col -->
      <div class="col-8"></div>
      <div class="col-4">
        <button onclick="validasi()" class="btn btn-primary btn-block">Sign In</button>
      </div>
      <!-- /.col -->
    </div>
      <p class="mt-3">
        <a href="<?= base_url("auth")?>" class="text-center">Sudah punya akun?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>

<!-- Modal -->
<div class="modal fade" id="syarat_ketentuan">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Syarat dan Ketentuan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dicta illum aperiam nostrum consequatur est soluta qui cumque voluptas eius, ullam laborum impedit omnis assumenda officiis, vero quae delectus molestias cum totam eos! Est voluptate corporis nihil, vitae consectetur similique nobis! Distinctio similique officiis possimus culpa dignissimos accusantium vitae, animi perspiciatis voluptate? Fugit earum architecto quasi laborum. Sint, omnis? Eum aspernatur dolores nihil molestias, ut vero magnam dignissimos facilis quod maxime fugiat soluta expedita illum vitae aut voluptas doloribus laborum quaerat. Consequuntur amet numquam et tenetur blanditiis explicabo cum ratione quisquam. Provident, rerum iusto? Consequuntur cupiditate nam ratione qui, eius eaque? Illo deleniti sed molestias, cumque officiis sequi delectus in, repellat doloremque ea molestiae culpa repellendus voluptas tempora minima quam quas corporis odio aliquid error mollitia beatae necessitatibus? Aliquid numquam fugiat distinctio? Laboriosam ab ducimus a repudiandae doloribus explicabo iusto ullam, eaque modi! Et incidunt suscipit blanditiis nobis dolorem. Assumenda aliquam earum repellat, suscipit tempora enim facere reiciendis vitae doloribus modi exercitationem sequi unde corporis quo impedit dolores eveniet facilis vel. Ipsam illo consectetur ab inventore molestiae mollitia sequi voluptate aliquid expedita deleniti ea id quas dicta, impedit eligendi recusandae nihil accusantium adipisci minima iure excepturi fuga. Nemo obcaecati optio corporis, accusamus aut repudiandae dolor cupiditate, ratione nam recusandae vel itaque laudantium aspernatur sed animi cum, iusto eligendi eos adipisci fugiat molestiae. Ad, laboriosam recusandae nulla magnam omnis dolores molestiae delectus sed nisi dicta voluptates amet tempore nihil sint tenetur obcaecati, quo esse aliquid magni cupiditate labore? Ducimus veritatis quidem a quae neque quia pariatur optio labore sunt corrupti rerum atque, totam quasi ratione esse! Dignissimos facilis dolores qui earum eveniet inventore minima eum. Ipsa nulla eligendi enim eos? Non, quibusdam? Officia deleniti modi nostrum, similique ad rem, vel incidunt mollitia sunt voluptate, temporibus magnam commodi eum quia possimus voluptas consequatur ducimus deserunt. Perspiciatis cumque eligendi ratione placeat voluptatem reiciendis asperiores veniam blanditiis, animi maxime rerum a, nisi magni! Deleniti dolorem iusto error, sint saepe, facere impedit fugit atque consectetur quod ducimus harum odio eligendi aliquid eius doloribus libero similique sunt ipsum alias dolore itaque unde? Corrupti non excepturi vero dolorum, ut delectus exercitationem. Omnis iure id eaque qui libero officiis necessitatibus perspiciatis incidunt, ea quas, tempore dolorum dignissimos nostrum. Hic ullam inventore error amet voluptas, dolores nam blanditiis a recusandae fugiat distinctio ducimus! Qui ipsum nihil illum soluta nostrum sapiente, nemo autem reprehenderit aperiam maiores, animi illo eaque possimus facere ad non suscipit nam mollitia delectus excepturi natus nobis. Voluptatum veritatis quis nobis dicta quo sunt fugiat doloribus labore obcaecati quibusdam eaque, cum delectus. Deserunt voluptas vel commodi consectetur dicta quae, dolore, maxime voluptates laboriosam iure labore, vitae repellendus magnam? Consequatur dignissimos tempore minus eius accusantium voluptate, debitis dolores cum rerum quod, fuga delectus iure iste libero molestias voluptas. Iusto adipisci, nesciunt vel laboriosam temporibus et corporis, impedit deserunt molestias suscipit animi ut, cum neque nam. Corporis at dolores, nesciunt dicta deleniti corrupti similique deserunt harum inventore aliquid amet, et dolorem! Nulla rem, minima similique voluptate a neque numquam?
            </div>
            <div class="modal-footer justify-content-between">
            <div>
                <input onchange="check()" id="check" type="checkbox" value="agree"> Saya Setuju</input>
                <!-- <button onclick="check()">tes</button> -->
            </div>
            <div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                <button type="button" onclick="submit()" id="lanjut" disabled class="btn btn-primary">Lanjutkan</button>
            </div>
            </div>
          </div>
<script>
    function check(){
        if(document.getElementById("check").checked){
        document.getElementById("lanjut").disabled = false
        }else{
        document.getElementById("lanjut").disabled = true
        }
    }
</script>

<script>
    function validasi(){
        var username = document.getElementById("username").value;
        var fullname = document.getElementById("fullname").value;
        var notelp = document.getElementById("notelp").value;
        var password = document.getElementById("password").value;
        var konfirmasi = document.getElementById("konfirmasi").value;
        if(fullname==""){
            document.getElementById("v_fullname").innerHTML = '<input type="text" id="fullname" class="form-control is-invalid" name="fullname" required>';
        }
        else if(username==""){
            document.getElementById("v_username").innerHTML = '<input type="text" id="username" class="form-control is-invalid" name="username" required>';
        }else if(password==""){
            document.getElementById("v_password").innerHTML = '<input type="password" id="password" class="form-control is-invalid" name="password" required>';
        }else if(konfirmasi==""){
            document.getElementById("v_konfirmasi").innerHTML = '<input type="password" id="konfirmasi" class="form-control is-invalid" name="konfirmasi" required>';
        }else if(password != konfirmasi){
            document.getElementById("v_konfirmasi").innerHTML = '<input type="password" id="konfirmasi" class="form-control is-invalid" value="'+konfirmasi+'" name="konfirmasi" required><span class="text-danger">Password tidak cocok!</span>';
        }else if(notelp == ""){
            document.getElementById("v_notelp").innerHTML = '<input type="text" id="notelp" class="form-control is-invalid" name="notelp" required>';
        }else{
            var galleryModal = new bootstrap.Modal(document.getElementById('syarat_ketentuan'), {
                keyboard: false
            });
            galleryModal.show();
        }
    }
    function submit(){
        document.getElementById("daftar").submit();
    }
</script>
</body>
</html>
