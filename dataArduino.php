
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Main Station- Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  

            <!-- Average Temperature -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Average Temperature</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><p class="Av_temp"></p>    <p class="status"></p>      <p class="arus"></p>  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-thermometer-empty fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Average Humidity -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Average Humidity</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><p class="Av_hum"></p></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-percent fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
  // Ganti XXXXX dengan Channel ID yang sesuai
  // Ganti YYYYYYYYY dengan API Key yang sesuai
  setInterval(function () {
  $.getJSON('https://api.thingspeak.com/channels/2341812/feeds.json?', function(data) {
    $(".total_entry").html(data.entry_id);
  }); 

  $.getJSON('https://api.thingspeak.com/channels/2341812/feeds/last.json?api_key=Y89BAEGUX7CEE5N2K', function(data) {
   $(".Av_temp").html(data.field1);
   $(".Av_hum").html(data.field2);
     sendDataToPHP(data.field1, data.field2);
  });
}, 10000);
  function sendDataToPHP(avTemp, avHum) {
    // Kirim data menggunakan metode POST ke file PHP yang sama
    $.post('<?php echo $_SERVER['PHP_SELF']; ?>', { Av_temp: avTemp, Av_hum: avHum }, function(response) {
      console.log('Data berhasil:', response);
    }).fail(function(error) {
      console.error('Error saat mengirim data ke PHP:', error);
    });
  }
});

</script>

<?php
 include "inputMysql.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $avTemp = isset($_POST['Av_temp']) ? $_POST['Av_temp'] : '';
  $avHum = isset($_POST['Av_hum']) ? $_POST['Av_hum'] : '';


  echo "Data berhasil diterima di server PHP!";
  echo "Av_temp: $avTemp";
  echo "Av_hum: $avHum";

if ($avTemp>=40){
  mysqli_query($koneksi, "insert into pesansim900 set
        nama_id = '$avTemp',
        alamat_alat ='$avTemp',
        pesan_alat = '$avHum'
  ");
}
} else {
  echo "Tidak ada data yang diterima.";
}
?>

</body>


</html>