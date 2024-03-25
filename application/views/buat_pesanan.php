  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Buat Pesanan Anda</h5>
                </div>
                <div class="card-body">
                  <form action="<?= base_url("pesanan/buat_pesanan") ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" readonly value="<?= $this->session->userdata("fullname") ?>" class="form-control">
                      </div>
                      <div class="col-lg-6">
                        <label for="">No. Telepon</label>
                        <input type="number" name="notelp" readonly value="<?= $this->session->userdata("notelp") ?>" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="">Lokasi Awal</label>
                        <div class="input-group mb-3">
                          <input readonly type="text" id="pilih_awal" class="form-control" name="lokasi_awal">
                          <input type="hidden" id="l1" class="form-control">
                          <input type="hidden" id="b1" class="form-control">
                          <input type="button" data-toggle="modal" data-target="#lokasi_awal" class="input-group-text" value="Pilih Map">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="">Lokasi Tujuan</label>
                        <div class="input-group mb-3">
                          <input readonly type="text" id="pilih_tujuan" class="form-control" name="lokasi_tujuan">
                          <input type="hidden" id="l2" class="form-control">
                          <input type="hidden" id="b2" class="form-control">
                          <input type="button" data-toggle="modal" data-target="#lokasi_tujuan" class="input-group-text" value="Pilih Map">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="">Jarak</label>
                          <div class="input-group">
                            <input type="text" readonly id="jarak" class="form-control" name="jarak">
                            <span class="input-group-text" id="basic-addon2">KM</span>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="">Harga</label>
                        <div class="input-group">
                          <span class="input-group-text">Rp.</span>
                          <input type="text" readonly id="harga" class="form-control" name="harga">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="">Pilih Pembayaran</label>
                        <select type="select" name="pembayaran" class="form-control">
                          <option value="BRI">BRI</option>
                          <option value="BNI">BNI</option>
                          <option value="BCA">BCA</option>
                          <option value="MANDIRI">Mandiri</option>
                          <option value="BANK JATIM">Bank Jatim</option>
                          <option value="SHOPEEPAY">ShopeePay</option>
                          <option value="DANA">Dana</option>
                          <option value="OVO">OVO</option>
                        </select>
                      </div>
                      <div class="col-lg-6">
                        <label for="">Bukti Pembayaran</label>
                        <input type="file" name="bukti" class="form-control">
                      </div>
                    </div>

                    <div class="row mt-3 justify-content-end">
                      <button class="btn btn-secondary mr-3">Batalkan</button>
                      <button class="btn btn-primary">Buat Pesanan</button>
                    </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="lokasi_awal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Lokasi Awal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="googleMap" style="width:100%;height:380px;"></div>
      </div>
      <div class="modal-footer justify-content-end">
          <button onclick="getJarak()" type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
          <!-- <button type="button" class="btn btn-primary">Simpan</button> -->
      </div>
  </div>
</div>
</div>

<div class="modal fade" id="lokasi_tujuan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Pilih Lokasi Akhir</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="googleMap1" style="width:100%;height:380px;"></div>
      </div>
      <div class="modal-footer justify-content-end">
          <button onclick="getJarak()" type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
          <!-- <button type="button" id="pilih_akhir" class="btn btn-primary">Pilih</button> -->
      </div>
  </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( document.getElementById("pilih_awal").value!="" ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("pilih_awal").value = posisiTitik.lat()+","+posisiTitik.lng();
    document.getElementById("l1").value = posisiTitik.lat();
    document.getElementById("b1").value = posisiTitik.lng();
    
}
function taruhMarker1(peta, posisiTitik){
    if (document.getElementById("pilih_tujuan").value!=""){
      marker.setPosition(posisiTitik);
    }else{
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
     document.getElementById("pilih_tujuan").value = posisiTitik.lat()+","+posisiTitik.lng();
     document.getElementById("l2").value = posisiTitik.lat();
     document.getElementById("b2").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.289162,112.613228),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
}

function initialize1() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.289162,112.613228),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta1 = new google.maps.Map(document.getElementById("googleMap1"), propertiPeta);
  // even listner ketika peta diklik
  google.maps.event.addListener(peta1, 'click', function(event) {
    taruhMarker1(this, event.latLng);
  });
}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize1);
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
  function toRadians(degrees) {
  return degrees * (Math.PI / 180);
}

function haversine(lat1, lon1, lat2, lon2) {
  const R = 6371; // Radius of the Earth in km
  const dLat = toRadians(lat2 - lat1);
  const dLon = toRadians(lon2 - lon1);
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(toRadians(lat1)) * Math.cos(toRadians(lat2)) *
    Math.sin(dLon / 2) * Math.sin(dLon / 2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  const distance = R * c;
  return distance;
}

function getJarak(){
  const distance = haversine(document.getElementById("l1").value, document.getElementById("b1").value,document.getElementById("l2").value, document.getElementById("b2").value);
  document.getElementById("jarak").value = distance.toFixed(2);
  if(distance.toFixed(2)<=4){
    document.getElementById("harga").value = Math.round(distance.toFixed(2)*2500);
  }else{
    document.getElementById("harga").value = Math.round((distance.toFixed(2)-4)*2000+10000);
  }
}

</script>