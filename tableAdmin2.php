<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="sweetalret.js"></script>
	<title>Tabel</title>
	<link rel="stylesheet" href="style.css">

</head>

<style>

* {
	margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: none;
    z-index: 99;
    background-color: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(60px);
    padding-bottom: 15px;
    transition: background-color 1s ease;
    transition: padding-bottom 1s ease; 
    border-radius: 0px 0px 20px 20px;
}

.pogo {
    font-size: 2em;
    color: #fff;
    margin-top: -10px;
    margin-left: -10px ;
    user-select: none;
}

.nav_go a {
    position: relative;
    left: 300px;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 25px;
}

.nav_go a::after {
    content: "";
    position: absolute;
    width: 100%;
    left: 0;
    bottom: -5px;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform: scale(0);
    transform-origin:left ;
    transition: transform .5s;
}

.nav_go a:hover::after {
    transform-origin: left;
    transform: scale(1);
}

.Login-container {
    width: 30%;
    height: 40px;
    max-width: 120px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
}

.Login-container:hover {
    background: white;
    color: #000B18 ;
}

.container {
    display: flex;
    background-image: linear-gradient(to right, #00CED1, #9932CC);
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container-1 {
    display: flex;
    background-image: linear-gradient(to right, #00CED1, #9932CC);
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items: center;
    min-height: 50vh;
}


.container-2 {
	display: flex;
	background-color: white;
	height: 15vh;
}

table {
	border-spacing: 1;
	border-collapse: collapse;
	border-radius: 7px;
	overflow: hidden;
	text-align: center;
	width:80%;
	max-width: 80%;
	margin-top: 10%;
	margin-bottom: 10%;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th {
	background-color: #2F4F4F ;
	font-family: 'Poppins', sans-serif;
	color: white;
	font-size: 15px;
	padding: 10px 0px;
}

td {
	font-family: OpenSans-Reguler;
	padding: 15px 0px;
	vertical-align: top;
	background-color: white;
}

tbody tr {
	transition: 0.5s;
}

tbody tr:hover {
	color: whitesmoke;
	background-color: #f5f5f5;
	cursor: pointer;
	position: relative;
	border-radius: 10px;
	box-shadow:0 0 10px rgba(0, 0, 0, 0.3);
	transition: 0.5s;
}

button {
    padding: 2px;
    font-size: 1.1em;
    cursor: pointer;
    transition: 0.5s;
    border: 1px solid whitesmoke;
    border-radius: 3px;
}

button:hover {
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
	transition: 0.5s;
}

.button-1 {
	color: blueviolet;
	text-decoration: none;
}
 
.button-2 {
	color: white;
	background-color: #6495ED;
}

.modal-body {
	padding-right: 20px;
	display: flex;

	flex-direction: column;
}


.Alamat-container {
    width: 90%;
    background-color: #D6DBDF;
    border-radius: 3px;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    margin: 0px 10px 10px 10px;
    color: #black;
    font-size: 1em;
    outline-color: blueviolet;
}

label {
	font-size: 15px;
}

p {
	padding: none;

}

.card-1 {
    width: 85%;
    padding-bottom: 30px;
    border-radius: 8px;
    padding: 40px 0px 45px;
    margin: 10% 0;
    justify-content: center;
  	background: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.card-2 {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 20px;
}

.card-3 {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 20px;
}

.card-4 {
	padding: 1rem;
	width: 40%;

/*	padding-right: 4rem;
	padding-left: 4rem;*/
	border: none;
	border-radius: 3px;
	background: white;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);;
}



.chart {
	padding: 3rem;
	padding-right: 2.5rem;
	padding-left: 2.5rem;
	border: none;
	border-radius: 3px;
	background: white;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.card-headers{
/*	background-color: whitesmoke;*/
	color: #0D85F7;
	padding-bottom: 20px;
	text-align: center;

}

.card-1 button {
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    border: none;
    margin-top: 20px;
    padding: 10px 45px;
    cursor: pointer;
    transition: 0.5s;
}

.card-1 button:hover {
    background-image: linear-gradient(to right, #00CED1, #9932CC); /* Gradasi dari biru ke merah */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    transition: 0.5s;
    }

h1 {
  position: relative;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 40px;
  color: #080808;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
}

h1 span {
  display: block;
  font-size: 0.5em;
  line-height: 1.3;
}
h1 em {
  font-style: normal;
  font-weight: 600;
}


.eight h1 {
  text-align:center;
  text-transform:uppercase;
  font-size:26px; letter-spacing:1px;
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  grid-template-rows: 16px 0;
  grid-gap: 22px;
  letter-spacing: 7px;
}

.eight h1:after,.eight h1:before {
  content: " ";
  display: block;
  border-bottom: 1px solid #ccc;
  margin: 0px 50px;
}



</style>

<body>


<!-- Navbar -->
 <header>
        <h2 class="pogo">Pogo</h2>
        <nav class="nav_go">
            <a href="HomePage2.php">Home</a>
            <a href="#section1">Navigation</a>
            <a href="InpurReport2.php">Report</a>
            <a href="#">About</a>            
        </nav>

        <div class="dropdown">
            <button></button>
            <div class="content-class">
                <a href="">Edit</a>
                <a href="">Setting</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>

    </header>

<!-- Section 1 dan tabel  -->
<div class="container" id="section1">
	<!-- <h1 style="width:100%;">Dashboard</h1> -->
		<table>
				<tr>
					<th colspan="9">Laporan</th>
				</tr>
				<tr>
					<th style="padding-left: 10px; width: 30px;">No</th>
					<th style="padding-left: 10px; width: 30px;">Id</th>
					<th style="width:150px;">Aplikasi</th>
					<th style="width:130px;">Tanggal</th>
					<th style="width:190px;">Kerusakan</th>
					<th style="width: 160px;">Alamat</th>
					<th style="width: 220px;">Keterangan</th>
					<th colspan="2">Action</th>
				</tr>
				<tbody>
	<?php
			include "inputMySql.php";

			$nomor=1;
			$data = mysqli_query($koneksi, "select * from message2");
			while ($data_ambil = mysqli_fetch_array($data)){
				echo"
					<tr>
						<td>$nomor</td>
						<td>$data_ambil[id]</td>
						<td>$data_ambil[aplikasi_laporan]</td>
						<td>$data_ambil[tanggal_laporan]</td>
						<td>$data_ambil[permasalahan_laporan]</td>
						<td>$data_ambil[alamat_laporan]</td>
						<td style='text-align: justify; padding-left: 10px; text-indent: 2em; word-spacing: 2px;'>$data_ambil[keterangan_laporan]</td>
						<td style='width:50px'><a href='?hapus=$data_ambil[id]'><button class='button-1'><i class='fa fa-trash' aria-hidden='true'></i></button></a></td>
						<td style='width:50px'><a href='UbahDataAdmin.php?ubah=$data_ambil[id]'><button type='button'><i class='fa fa-pencil' aria-hidden='true'></i></button></a></td>
					</tr>";
				$nomor++;	
			}
	  ?>
	  

	  <?php
	  	if (isset($_GET['hapus'])){
	  		mysqli_query($koneksi, "delete from message2 where id='$_GET[hapus]'");
	  	echo "
	  	<script>
	  		swal({
				  title: 'Penghapusan Berhasil',
				  icon: 'success',
				  showConfirmButton: false,
			});	
	  	</script>";

			echo "<meta http-equiv=refresh content=2;URL='tableAdmin2.php'>";
	  	}
	  	?>
	  			</tbody>

	  	</table>
</div>

		<div class="container-1">
			<div class="card-1">
				<div class="eight">
  					<h1>DashBoard</h1>
				</div>
				<br><br><br>
			<div class="card-2">
				<div class="chart">
					<div class="card-headers">
						<h2>Current Sensor</h2>
					</div>
					<div class="card-body">
						<iframe width="450" height="260" style="border: none;" src="https://thingspeak.com/channels/2341798/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
					</div>
				</div>
				<div class="chart">
					<div class="card-headers">
						<h2>Light Sensor</h2>
					</div>
					<div class="card-body">
						<iframe width="450" height="260" style="border: none;" src="https://thingspeak.com/channels/2341798/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
					</div>
				</div>
			</div>
			<br><br>
			<button  onclick="deleteDataSensor()">Delete</button>
			<br><br>
			<br><br>

			<div class="eight">
  					<h1>Average</h1>
			</div>
			<br><br><br>
				<div class="card-3">
					<div class="card-4">
						<div style="color:#1E90FF; font-size: 20px;">Average Current</div>
						<br>			
						<p class="Av_temp" style="font-size: 30px; color:black;"></p> 
						<i class="fa fa-bolt" aria-hidden="true" style="font-size:50px; color: dimgray;"></i>
					</div>
					<div class="card-4">
						<div style="color:#1E90FF; font-size: 20px;">Average Light</div>
						<br>
						<p class="Av_hum" style="font-size: 30px; color:black;"></p>
						<i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size:50px; color: dimgray;"></i>
					</div>
		          </div>
		          <br>
          	<button  onclick="deleteDataRataRata()">Delete</button>
        </div>
        <br>
	</div>

	<div class="container-1">
		<table>
				<tr>
					<th colspan="9">Laporan</th>
				</tr>
				<tr>
					<th style="padding-left: 10px; width: 30px;">No</th>
					<th style="width:60px;">Id Aplikasi</th>
					<th style="width:130px;">Alamat</th>
					<th style="width:100px;">Pesan</th>
					<th>Action</th>
				</tr>
				<tbody>
	<?php
			include "inputMySql.php";

			$nomor=1;
			$data_pesan = mysqli_query($koneksi, "select * from pesansim900");
			while ($data_ambil_pesan = mysqli_fetch_array($data_pesan)){
				echo"
					<tr>
						<td>$nomor</td>
						<td>$data_ambil_pesan[nama_id]</td>
						<td>$data_ambil_pesan[alamat_alat]</td>
						<td>$data_ambil_pesan[pesan_alat]</td>
						<td style='width:30px'><a href='?hapus_pesan=$data_ambil_pesan[nama_id]'><button class='button-1'><i class='fa fa-trash' aria-hidden='true'></i></button></a></td>
					</tr>";
				$nomor++;	
			}
	  ?>
	  

	  <?php
	  	if (isset($_GET['hapus_pesan'])){
	  		mysqli_query($koneksi, "delete from pesansim900 where nama_id='$_GET[hapus_pesan]'");
	  	echo "
	  	<script>
	  		swal({
				  title: 'Penghapusan Berhasil',
				  icon: 'success',
				  showConfirmButton: false,
			});	
	  	</script>";

			echo "<meta http-equiv=refresh content=2;URL='tableAdmin2.php'>";
	  	}
	  	?>
	  			</tbody>

	  	</table>
	</div>




<div class="container-2">
	
</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
	<script>
		function deleteDataSensor() {
		  const channelID = '2341798';
		  const apiKey = 'HARKQVCMFGAZABRY';

		  const url = `https://api.thingspeak.com/channels/${channelID}/feeds.json?api_key=${apiKey}`;

		  fetch(url, { method: 'DELETE' })
		    .then(response => {
		      if (!response.ok) {
		        throw new Error(`HTTP error! Status: ${response.status}`);
		      }
		      return response.json();
		    })
		    .then(data => {
		      console.log('Data berhasil dihapus:', data);
		      Swal.fire({
	                title: "succeed",
	                text: "Data Berhasil Dihapus",
	                icon: "success",
	                confirmButtonColor: "#3085d6",
	                confirmButtonText: "Oke"
	            }).then((result) => {
	                if (result.isConfirmed) {
	                // Redirect to the next page
	                    window.location.href = "tableAdmin2.php";
	                }
	            });
		    })
		    .catch(error => {
		      console.error('Error:', error);
		      alert('Terjadi kesalahan saat menghapus data.');
		    });
		}
	</script>

	<script>
		function deleteDataRataRata() {
		  const channelID = '2341812';
		  const apiKey = 'HARKQVCMFGAZABRY';

		  const url = `https://api.thingspeak.com/channels/${channelID}/feeds.json?api_key=${apiKey}`;

		  fetch(url, { method: 'DELETE' })
		    .then(response => {
		      if (!response.ok) {
		        throw new Error(`HTTP error! Status: ${response.status}`);
		      }
		      return response.json();
		    })
		    .then(data => {
		      console.log('Data berhasil dihapus:', data);
		      Swal.fire({
	                title: "succeed",
	                text: "Data Berhasil Dihapus",
	                icon: "success",
	                confirmButtonColor: "#3085d6",
	                confirmButtonText: "Oke"
	            }).then((result) => {
	                if (result.isConfirmed) {
	                // Redirect to the next page
	                    window.location.href = "tableAdmin2.php";
	                }
	            });
			  })
		    .catch(error => {
		      console.error('Error:', error);
		      Swal.fire({
	                title: "succeed",
	                text: "Terjadi Kesalahan Dalam Menghapus Data",
	                icon: "error",
	                confirmButtonColor: "#3085d6",
	                confirmButtonText: "Oke"
	            }).then((result) => {
	                if (result.isConfirmed) {
	                // Redirect to the next page
	                    window.location.href = "tableAdmin2.php";
	                }
	            });
		    });
		}
	</script>


	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
  	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  	<script>
		  $(document).ready(function() {
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
	  	$avCurrent = isset($_POST['Av_temp']) ? $_POST['Av_temp'] : '';
	  	$avLight = isset($_POST['Av_hum']) ? $_POST['Av_hum'] : '';


	  	echo "Data berhasil diterima di server PHP!";
	  	echo "Av_temp: $avTemp";
	  	echo "Av_hum: $avHum";
	  	$idAlat = "Sim900 0999";
	  	$alamat = "Villa Tomang Baru Block N3 no 11 Kab.Tangerang Kec.Pasar Kemis";
	  	$pesanAlat = "Arus dan lampu pada alat ini mengalami masalah";

		if ($avCurrent<=200 && $avLight >=70){
	  	mysqli_query($koneksi, "insert into pesansim900 set
	        nama_id = '$idAlat',
	        alamat_alat ='$alamat',
	        pesan_alat = '$pesanAlat'
	  	");
		}
		} 
		else {
		}
?>

</body>
</html>