<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="sweetalret.js"></script>
    <title>Card Besar Tengah</title>
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
    justify-content: center;
    align-items: center;
    background-image: url('Foto.jpg');
    background-size: cover;
    background-position: center;
}

.card {
    width: 80%;
    padding-bottom: 30px;
    max-width: 700px;
    border-radius: 8px;
    padding: 20px 0px 45px;
    margin: 10% 0;
    justify-content: center;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.card h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.card p {
    font-size: 16px;
    color: #555;
}

.card h2 {
    font-size: 20px;
    margin-bottom: 20px;
    margin-top: 10px;
    color: #1F1F1F;
}

.Alamat-container {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    margin: 10px;
    color: black;
    font-size: 1em;
    outline-color: blueviolet;
}

.select-container {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    margin: 10px;
    font-size: 1em;
    outline-color: blueviolet;
    color: black;
}

.input-dateContainer {
    width: 45%;
    padding: 10px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 1em;
    color: black;
    outline-color: black;
}

.input-erro {
   width: 44%;
    height: 10%;
    padding: 11.4px 0px 11px 11px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 1em;
    color: black;
    outline-color: blueviolet;
}

.message-container {
    width: 90%;
    color: black;
    padding: 10px;
    border: 1px solid #ccc;
    margin: 10px;
    outline-color: blueviolet;
    font-size: 1em;
}

.card button {
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    border: none;
    margin-top: 20px;
    padding: 10px 45px;
    cursor: pointer;
    transition: 0.5s;
}

.card button:hover {
    background-image: linear-gradient(to right, #00CED1, #9932CC); /* Gradasi dari biru ke merah */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    transition: 0.5s;
    }

/*@media (max-width: 900px) {
    .card {
        margin: 20% 0%;
    }

}*/

</style>
<body>

    <header>
     <h2 class="pogo">Pogo</h2>
        <nav class="nav_go">
            <a href="HomePage1.php">Home</a>
            <a href="tabel1.php">Navigation</a>
            <a href="#section1">Report</a>
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

    <div class="container" id="section1">
        <div class="card">
            <div class="form-container">
                <h2>Contact Us</h2>
                <form action="" method="post">
                    <select class="select-container" name="aplikasi">
                        <option value="0"><i>None</i></option>
                        <option value="Lampu Penerangan">Lampu Penerangan</option>
                        <option value="Lampu Lalu Lintas">Lampu Lalu Lintas</option>
                        <option value="Bangku Taman">Bangku</option>
                    </select>
                    <br>
                    <input class="input-dateContainer" type="date" name="tanggal">
                    <input class="input-erro" type="text" name="permasalahan" placeholder="Error System" required>
                    <input class="Alamat-container" type="text" name="alamat" placeholder="Alamat" required>
                    <textarea class="message-container" name="keterangan" rows="10" cols="40" placeholder="Keterangan Tambahan" required></textarea>
                    <button value="kirim" id="wow" name="proses">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
<?php 
        include "inputMySql.php";

        if(isset($_POST['proses'])){
            mysqli_query($koneksi, "insert into message2 set
                aplikasi_laporan = '$_POST[aplikasi]',
                tanggal_laporan =  '$_POST[tanggal]',
                permasalahan_laporan = '$_POST[permasalahan]',
                alamat_laporan = '$_POST[alamat]',
                keterangan_laporan = '$_POST[keterangan]'");

                echo "
                    <script>
                        swal({
                              title: 'Data telah berhasil ditambahkan',
                              icon: 'success',
                              showConfirmButton: false,
                        }); 
                    </script>";

                echo "<meta http-equiv=refresh content=5;URL='InpurReport1.php'>";
        }

     ?>

</body>
</html>
