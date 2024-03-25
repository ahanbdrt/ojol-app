  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <?php if($this->session->flashdata("gagal")){?>
                  <div class="alert alert-danger" role="alert">
                  <?= $this->session->flashdata("gagal"); }?>
                  <?php if($this->session->flashdata("berhasil")){?>
                  <div class="alert alert-success" role="alert">
                  <?= $this->session->flashdata("berhasil"); }?>
              </div>
              <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">List Pesanan</h5>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Jarak</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    $no=1;
                    foreach($pesanan as $p){?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $p->nama_lengkap ?></td>
                        <td><?= $p->notelp ?></td>
                        <td><?= $p->jarak ?> Km</td>
                        <td>Rp. <?= $p->harga ?></td>
                        <td><?= $p->tanggal ?></td>
                        <td><?= $p->pembayaran ?></td>
                        <td class="text-center"><a target="_blank" href="<?= base_url("assets/upload/".$p->bukti)?>" class="btn btn-sm btn-warning">preview</a></td>
                        <td><?= $p->status ?></td>
                    </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>