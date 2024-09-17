<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.section {
    display: flex;
    align-items: center;
    height: 110vh;
    margin: 0 auto;
}

#section1 {
    width: 100%;
    background-image: linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
    position: relative;
    overflow: hidden;

}

#section2 {
    background-image: url('scenery.jpg');
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    justify-content: space-around;
    border-radius: 0 30px 0 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

    color: white;
}

.section-3 {
    display: flex;
    justify-content: center;
    margin: 0 auto;
    height: 15vh;
    background-color: #1F1F1F ;
}

.section4 {
    height: 5vh;
    width: 100%;
    background-image: linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
    position: relative;
    border-radius: 0 0 30px 0;
}

.section5 {
    display: flex;
    min-height: 85vh;
    margin: 0 auto;
    background-color: whitesmoke;
}

.section6 {
    display: flex;
    height: 70vh;
    margin: 0 auto;
    justify-content: space-around;
    background-color: whitesmoke;
    opacity: 0;
    transform: translate(0, -40px);
    transition: 1s;
}

.section6.muncul {
    opacity: 1;
    transform: translate(0,0);
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: none;
    z-index: 99;
    backdrop-filter: none;
    background-color: none;
    transition: background-color 1s ease;
    transition: padding-bottom 1s ease; 
    border-radius: 0px 0px 20px 20px;
}

.pogo {
    font-size: 1.5em;
    color: #fff;
    margin-top: -10px;
    margin-left: -10px ;
    user-select: none;
}

.nav_go a {
    position: relative;
    left: 280px;
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

.back-video {
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
    border-radius: 0 0 30px 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
  
.Paragraf p {
    color: white;
    margin: 20px;
    margin-left: 60px;
}

.Paragraf h1 {
    color: white;
    margin: 20px;
    font-size: 40px;
    margin-top: -10px;
    margin-left: 60px;
    display: block;
}

.Paragraf .Tooth {
    color: blueviolet;
    transition: 0.5s;
}

.Paragraf .Tooth:hover {
    -webkit-text-stroke: 1px #fff;
    color: transparent;
}

.Paragraf-2 h1 {
    margin-left: 20px;
    font-size: 30px;
    margin-right: 60px;
    margin-bottom: 10px;
    display: block;
}

.Paragraf .Tombol_SignUp{
    width: 25%;
    height: 35px;
    max-width: 120px;
    background: transparent;
    border: 1px solid #fff;
    outline: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
}

.Paragraf .Tombol_SignUp:hover {
    background: white;
    color: #000B18 ;
}


.Paragraf-2 p {
    margin-left: 20px;
    margin-right: 60px;
}

.Paragraf-2 h4 {
    width: 99px;
    color: white;
    padding: 5px;
    border-radius: 5px;
    margin: 20px;
    font-size: 15px;
    margin-top: 70px;
    display: block;
    background-color: blueviolet;
}

.Paragraf-2 ol {
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    line-height: 2;
    margin-left: 35px;
}

.card-container {
    display: flex;
    width: 40%;
    height: 60%;
    min-width: 200px;
    background-image: url('Pexel1.png');
    background-size: cover;
    background-position: center;
    border-radius: 5px;
    margin: 50px;
}

.card-container-2 {
    display: flex;
    align-items: center;
    width: 90%;
    height: 70%;
    min-width: 300px;
    background-color: white;
    box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
    backdrop-filter: blur(14px);
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    margin-top: 30px;
    margin-left: 30px ;
}

.card-container-3 {
    display: flex;
    width: 43%;
    height: 70%;
    position: relative;
    top: 50px;
    left: 50px;
    min-width: 100px;
    box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
    border-radius: 20px;    
}

#signal {
    background-image: url(tower1.png);
    background-size: cover;
    background-position: center;
}

#desain {
    background-image: url(desainalat.jpg);
    background-size: cover;
    background-position: center;
}

#peta {
    background-image: url(peta.png);
    background-size: cover;
    background-position: center;
}
    
.slider-container {
    width: 100%;
    overflow: hidden;
}

.slider {
/*    height: 100vh;*/
    display: flex;
    align-items: center;
    transition: transform 0.5s ease-in-out;
    white-space: nowrap;
}

.card {
    display: flex;
    width: 50%;
    justify-content: center;
    background-color: white;
    min-width: 700px;
    height: 500px;
    margin-left: 20px;
    margin-right: 20px;
    border-radius: 50px 10px 50px 10px;
    box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
    transform: 0.5s;
}

.card:hover {
    transform: 0.5s;
    box-shadow: 0 0px 10px rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(14px);
    background-color: rgba(255, 255, 255, 0.2);
}

.card .card-content {
    padding: 16px;
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 24px;
    color: #333;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

.video-container {
    overflow: hidden;
    border-radius: 10px;
    width: 70%;
    height: 60%;
    position: relative;
    left: 200px;
    top: 50px;
}

.video-container video {
    width: 100%;
    height: auto;
    display: block;
}

@media (max-width: 790px) {
    .section {
        flex-direction: column;
        align-items: center;
    }

    header {
        display: none;
        overflow: hidden;
    }

    h1 {
        text-align: center;
    }

    p {
        text-align: center;
    }
}

@media (min-aspect-ratio : 16/9) {
    .back-video{
        width: 100%;
        height: auto;
    }
}

@media (min-aspect-ratio : 16/9) {
    .back-video{
        width: auto;
        height: 100%;
    }
}

</style>
<body>
    <script src="Jquery-vers3-7-1.js"></script>

    <header>

        <h2 class="pogo">ToothFairy</h2>
        <nav class="nav_go">
            <a href="#section1">Home</a>
            <a href="tableAdmin2.php">Navigation</a>
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
<div class="section" id="section1">

    <video autoplay loop muted plays-inline class="back-video">
        <source src="Autum.mp4" type="video/mp4">
    </video>

        <div class="Paragraf" style="position:relative; left: 50px; top: 5px;">
            <h1>Advancing Indonesia With The</h1>
            <h1 class="Tooth">Tooth Fairy</h1>
            <p style="font-family: 'Lato', sans-serif; font-size: 15px; line-height: 1.6;">
                Tooth Fairy is a website created for the community, so that people <br>can report complaints about existing facilities.<br>It's easy and fast with the tooth fairy.
            </p>
            <button class="Tombol_SignUp" onclick="MenujuPageReport()" style="position: relative; left:20px;">Criticize</button>
        </div>
    <div class="card-container" style="position:relative; left:20px;" title="Samuel Tristan Wirayuda">
    </div>
</div>


<div class="section4"></div>


<div class="section" id="section2">
   <div class="card-container-2">
       <div class="slider-container">
           <div class="slider">
                   
                   <div class="card">
                       <div class="card-content">
                           <h1 style="color:#424949;font-family:'Poppins'; font-size: 20px; text-align:center;">Sistem control, Monitoring dan Reporting Lampu Penerangan<br> Jalan Menggunakan Website</h1>
                           <br>
                           <img src="desain.png" style="width: 400px; position:relative;left:95px ;">
                           <br>
                           <br>
                           <p class="Paragraf-2" style="color:#424949;font-family: 'Lato', sans-serif;text-align:center ; font-size: 15px; line-height: 1.6;">
                                Sistem Penerangan jalan memiliki 2 sumber tegangan utama, melalui panel surya <br>dan listrik PLN. Memiliki 2 sensor yang berfungsi untuk memantau dan mengukur<br>  arus listrik,serta cahaya lampu. Alat ini juga memiliki sensor PIR sebagai sistem<br> keamanan, jika terdapat tindakan pencurian. Untuk jalur komunikasi <i>website</i> <br>dengan  <i>hardware</i>, saya menggunakan komponen SIM900 <i>Shield</i> GSM/GPRS<br> dan otak dari keseluruhan sistem hardware ini adalah Arduino Nano.
                            </p>
                       </div>
                   </div>

                   <div class="card">
                        <div class="card-content">
                           <img src="Diagram-Kotak1.png" style="width: 500px; position:relative;left:0px ;">
                           <br>
                           <h3 style="font-family:'Poppins'; color: #424949; text-align: center;">Diagram Kotak Sistem Monitoring, dan Control</h3>
                        </div>
                   </div>

                   <div class="card">
                       <div class="card-content">
                        <br>
                           <img src="Diagram-Web.png" style="width: 500px; position:relative;left:0px ;">
                           <br>
                           <br>
                           <h3 style="font-family:'Poppins'; color: #424949; text-align: center;">Diagram Sistem <i>Website</i></h3>
                       </div>
                   </div>
           </div>

           <div class="prev">&#10094;</div>
           <div class="next">&#10095;</div>  
       </div>

   </div>
</div>

<!-- width="860" height="520" style="position:relative; left: 225px;" -->

<div class="section5">
    <div class="video-container">
        <video controls>
            <source src="Autum.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="section6">
    <div class="card-container-3" id="signal" title="Desain Alat">
    </div>
    <div class="Paragraf-2">
        <h4>KEAMANAN</h4>
        <h1>Tidak Perlu Takut Akan Pencurian</h1>
        <p class="Paragraf-2" style="font-family: 'Lato', sans-serif; font-size: 15px; line-height: 2; font-weight: 500;">
            ToothFairy memiliki keamanan <i>medium</i> menggunakan sensor<br> PIR pada perangkat kerasnya. ToothFairy dapat memberikan respon <br> terhadap tindakan pencurian melalui alarm, baik alarm pada <br> <i>website</i> atau-pun pada perangkat kerasnya.
        </p>
        <ol type="1">
            <li>Sensor PIR Dapat Mendeteksi Hingga 6 Meter</li>
            <li>Buzzer Dapat Terdengar Hingga Mencapai Jarak 1 Kilometer</li>
        </ol>
    </div>
</div>

<div class="section6">
    <div class="Paragraf-2" style="position:relative; left: 50px; margin:0 auto;">
        <h4>KELEBIHAN</h4>
        <h1><span style="color:blueviolet;">ToothFairy</span> Bukan Hanya Itu Saja</h1>
        <p class="Paragraf-2" style="font-family: 'Lato', sans-serif; font-size: 15px; line-height: 2; font-weight: 500;">
            ToothFairy memilki kelebihan selain dari fitur keamanannya yang <br>dapat mengirimkan pesan ke dalam <i>handphone</i> admin.
        </p>
        <ol type="1">
            <li>Memudahkan Dinas Pekerja Umum melakukan pekerjaan.</li>
            <li>Sebagai saranan keluh kesah masyarakat terkait pemasangan<br> fasilitas - fasilitas umum.</li>
            <li>Menurunkan tingkat pencurian komponen perangkat pada fasilitas umum.</li>
            <li>Menghemat biaya pemakaian</li>
        </ol>
    </div>
    <div class="card-container-3" id="desain" title="Desain Alat" style="margin-right: 110px; margin-left: 0px;">
    </div>
</div>

<div class="section6">
    <div class="card-container-3" id="peta" title="Desain Alat">
    </div>
    <div class="Paragraf-2">
        <h4 style="width:112px">PENEMPATAN</h4>
        <h1>Dapat dipasang dimana saja</h1>
        <p class="Paragraf-2" style="font-family: 'Lato', sans-serif; font-size: 15px; line-height: 2; font-weight: 500;">
            Dengan penempatan yang tepat, dapat dipastikan bahwa alat dapat <br> berfungsi dengan optimal. Alat dapat terpasang pada beberapa tempat<br> seperti, daerah persisir, perkotaan, desa dan lain - lainnya. Setiap <br> alat dipasang dengan teliti dan cermat oleh <i>team</i> kami. Tim ahli <br> kami mengevaluasi setiap lokasi dengan seksama untuk <br> menentukan posisi yang optimal, mempertimbangkan faktor-faktor<br> seperti aksesibilitas, lingkungan sekitar, dan persyaratan teknis.
        </p>
    </div>
</div>
    
<div class="section-3">
    <h3 style="color: white; font-family: 'Times', sans-serif; margin-top: 40px;">Samuel Tristan Wirayuda</h3>
</div>

<script>
    function MenujuPageReport(){
        window.location.href = "InpurReport2.php";
    }
</script>

<script>
    const slider = document.querySelector('.slider');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let translateValue = 0;
    const cardWidth = 720;
    const cardMargin = 20;

    nextBtn.addEventListener ('click', () => {
        if (translateValue > -(slider.scrollWidth - slider.clientWidth)) {
            translateValue -= cardWidth + cardMargin;
            slider.style.transform = `translateX(${translateValue}px)`;
        }
    });

    prevBtn.addEventListener('click', () => {
        if (translateValue < 0) {
        translateValue += cardWidth + cardMargin;
        slider.style.transform = `translateX(${translateValue}px)`;
        }
    });
</script>

<script>
    $(window).scroll(function() {
        var wScroll = $(this).scrollTop();

        console.log(wScroll);

        $('.Paragraf').css({
            'transform' : 'translate(0px, '+ wScroll/4 +'%)'
        });

        $('.card-container ').css({
            'transform' : 'translate(0px, '+ wScroll/2 +'%)'
        });

        if (wScroll >768) {
            $('header').css('background-color', 'rgba(0, 0, 0, 0.4)')
            $('header').css('backdrop-filter', 'blur(60px)')
            $('header').css('padding-bottom', '15px')
        }
        else {
            $('header').css('background-color', 'transparent')
            $('header').css('backdrop-filter', 'none')
            $('header').css('padding-bottom', '30px')
        }

        if(wScroll> 2000) {
            $('.section6').addClass('muncul');
        }

    });
</script>

</body>
</html>