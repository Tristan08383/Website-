<?php
session_start();
include "inputMySql.php";
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="sweetalret.js"></script>
    <title>Login</title>
</head>
<style>
    /* Resetting default margin and padding for all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style untuk body */
body {
    font-family: 'Poppins', sans-serif;
    background-image: url('Foto.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
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

/* Style untuk container login */
.login-container {
    background-color: transparent;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    padding: 20px;
    margin: 0 auto;
    height: 60%;
    width: 45%;
    max-width: 300px;
    min-width: 300px;
    text-align: center;
    backdrop-filter: blur(20px);
}

/* Style untuk judul Login */
.login-container h2 {
    font-size: 30px;
    margin-bottom: 40px;
    margin-top: 20px;
    color: whitesmoke;
}

.login-container h6 {
    font-size: 10px;
    font-family: Arial, sans-serif;
    font-weight: bold;
    text-align: center;
    margin-top: 70px;
    margin-bottom: 5px;
    color: white;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.login-container a {
    text-decoration: none;
    text-align: center;
    color: whitesmoke;
    outline: none;
    border: none;
    font-size: 12px;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    transition: 0.3s;
    display: inline-block;
}

.login-container a:hover {
    color: #6f00ff;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: 0.5s;
}

.login-container a:active {
    color: darkred;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: 0.5s;   
}

/* Style untuk input fields */
.login-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-bottom: 2px solid rgba(255, 255, 255, .5);
    font-size: 1em;
    transition: 0.5s;
    background-color: transparent;
    color: white;
}

.login-container input:focus {
    outline: none;
    transition: .5s;
}

.login-container button {
    background-color: #007bff;
    color: #fff;
    margin-top: 25px;
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    width: 100%;
    cursor: pointer;
    transition: 0.5s;
}

.login-container button:hover {
    background-image: linear-gradient(to right, #00CED1, #9932CC); /* Gradasi dari biru ke merah */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    transition: 0.5s;
}

.login-container button:active {
    background-image: blueviolet;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    transition: 0.5s;
}

</style>
<body>

    <header>
        <h2 class="pogo">Pogo</h2>
        <nav class="nav_go">
            <a href="index.html">Home</a>
            <a href="tabel.php">Navigation</a>
            <a href="inputReport0.html">Report</a>
            <a href="#">About</a>            
        </nav>
    </header>

    <div class="login-container">
        <h2>LOGIN</h2>
        <form action="" method="POST">
            <input name="Username" type="text" placeholder="Username" required>
            <!-- <span>Username</span> -->
            <input name="Password" type="password" placeholder="Password" required>
            <!-- <span>Password</span> -->
            <button type="submit" name="login-1">LOGIN</button>
        </form>

        <h6>Or Sign Up Using</h6>
        <a href="Sign_UP.php">SING UP</a>
    </div>

<?php 
include "inputMySql.php";

if (isset($_POST['login-1'])) {
    $sql = mysqli_query($koneksi,"select * from akun where username =  '$_POST[Username]' and password_akun = '$_POST[Password]'");
    $sqlAdmin = mysqli_query($koneksi,"select * from akunadmin where username =  '$_POST[Username]' and password_akun = '$_POST[Password]'");

    $cek = mysqli_num_rows($sql);
    $cekAdmin = mysqli_num_rows($sqlAdmin);

    if ($cek > 0) {
        $_SESSION['username'] = $_POST['Username'];

        echo "<meta http-equiv=refresh content=2;URL='HomePage1.php>";
    }

    elseif ($cekAdmin > 0) {
        $_SESSION['username'] = $_POST['Username'];

        echo "<meta http-equiv=refresh content=2;URL='HomePage2.php>";
    }
    else {
         echo "
                    <script>
                        swal({
                              title: 'Data Yang diMasukan Salah',
                              icon: 'warning',
                              showConfirmButton: false,
                        }); 
                    </script>";

        echo "<meta http-equiv=refresh content=2;URL='login.php>";
    }
}


?>
</body>
</html>
