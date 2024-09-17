<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel</title>
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

.container-2 {
	display: flex;
	color: white;
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
/*	text-align: justify;*/
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

</style>

<body>

	<header>
        <h2 class="pogo">Pogo</h2>
        <nav class="nav_go">
            <a href="index.html">Home</a>
            <a href="#section1">Navigation</a>
            <a href="inputReport0.html">Report</a>
            <a href="#">About</a>            
        </nav>
        <button class="Login-container" onclick="MenujuPageLogin()">Login</button>
    </header>

<div class="container" id="section1">
		<table>
				<tr>
					<th colspan="9">Laporan</th>
				</tr>
				<tr>
					<th style="padding-left: 10px;">No</th>
					<th style="width:150px;">Aplikasi</th>
					<th style="width:130px;">Tanggal</th>
					<th style="width:200px;">Kerusakan</th>
					<th style="width: 160px;">Alamat</th>
					<th>Keterangan</th>
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
						<td>$data_ambil[aplikasi_laporan]</td>
						<td>$data_ambil[tanggal_laporan]</td>
						<td>$data_ambil[permasalahan_laporan]</td>
						<td>$data_ambil[alamat_laporan]</td>
						<td style='text-align: justify; padding-left: 10px; padding-right: 10px; text-indent: 2em; word-spacing: 2px;'>$data_ambil[keterangan_laporan]</td>
					</tr>";
				$nomor++;	
			}

	  ?>
	  			</tbody>
	  	</table>
</div>

<div class="container-2">
	
</div>

<script>
	function MenujuPageLogin() {
		window.location.href = "login.php";
	}
</script>

</body>
</html>