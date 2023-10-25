<?php
    require "php/koneksi.php";

    $result = mysqli_query($conn, "select * from request");

    $request = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $request[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/posttest.css">
    <title>Pameran Lukisan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js" defer></script>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/logo.png" alt="#">
        <div class="openMenu"><i class="fa-solid fa-bars"></i></div>
        <div class="about">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#lukisan">Painting</a></li>
                <li><a href="#profil">Painter</a></li>
                <li><a href="#aboutme">AboutMe</a></li>
                <li><a href="php/data.php">Request</a></li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
            </ul>
        </div>
        <a href="login.html"><i  class="fa-regular fa-user fa-beat"></i></a>
        <i class="fa-regular fa-moon" id="toggleDark"></i>
    </div>
    <section class="home" id="home">
        <h3 class="time">    
            <?php
                date_default_timezone_set("Asia/Makassar");    
                echo date("Y-m-d H:i:sa"); 
            ?>
        </h3>
        <h1>Welcome</h1>    
    </section>
    <section class="lukisan" id="lukisan">
        <div class="card-header">
            <div class="card">
                <img src="https://e0.pxfuel.com/wallpapers/892/507/desktop-wallpaper-starry-night-by-vincent-van-gogh-painting.jpg">
                <div class="container">
                    <p>The Starry Night 
                        <br> Vincent Willem van Gogh 
                        <br> Juni 1889 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="https://e0.pxfuel.com/wallpapers/265/571/desktop-wallpaper-mona-lisa-thumbnail.jpg">
                <div class="container">
                    <p>Mona Lisa 
                        <br> Leonardo di ser Piero da Vinci 
                        <br> Abad ke-16 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="https://img.okezone.com/library/images/2018/04/27/hfb2hbf1mqirglzgdeam_12015.jpg">
                <div class="container">
                    <p>The Last Supper 
                        <br> Leonardo di ser Piero da Vinci 
                        <br>1495-1496 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="http://lh3.googleusercontent.com/J93J5rQY46ELt8VOAOf9pTDdcARc3V_2_eyPOtFm-2YfwZdGay_5O_MB7jIYr5taZQ=w454-h300-n-l64">
                <div class="container">
                    <p>Luncheon of the Boating Party 
                        <br> Pierre-Auguste Renoir 
                        <br> 1880-1881 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="http://lh3.googleusercontent.com/sR6plYFym0xcuBBkIkrq1T-BduK-z_jP69961TrRo8iYfBNje_-7cdb7FobO57-f=w454-h300-n-l64">
                <div class="container">
                    <p>The Great Wave off Kanagawa 
                        <br> Katsushika Hokusai 
                        <br> 1831 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="https://sfmoma-media-dev.s3.us-west-1.amazonaws.com/www-media/2023/02/28152346/45.1308_01_H02-Artsy-JPEG_4000-pixels-long-scaled.jpg">
                <div class="container">
                    <p>Guardians of the Secret 
                        <br> Paul Jackson Pollock 
                        <br> 1943 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="http://lh3.googleusercontent.com/JkiHD71MhbVzJJaZD73E1ns09o8zQAjN8grcZaK73X4KEkmTQ45iC7DUcvOH4Kr3=w454-h300-n-l64">
                <div class="container">
                    <p>The Blue Rider 
                        <br> Wassily Kandinsky
                        <br> 1903 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <div class="card">
                <img src="https://uploads1.wikiart.org/images/wassily-kandinsky/composition-viii-1923.jpg">
                <div class="container">
                    <p>Composition VIII 
                        <br> Wassily Kandinsky 
                        <br> Juli 1923 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <?php $i = 1;
            foreach ($request as $req) : ?>
            <div class="card">
                <img src="img/<?= $req['lukisan'] ?>" alt="ini lukisan">
                <div class="container">
                    <p><?= $req["judul"] ?>
                        <br> <?= $req["nama_pelukis"] ?>
                        <br> <?= $req["tahun_buat"] ?> 
                    </p>
                </div>
                <button class="btn">MORE</button>
            </div>
            <?php $i++;
            endforeach; ?>
        </div>
    </section>
    <section class="profil" id="profil">
        <divc class="card-border">
            <div class="card2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Vincent_van_Gogh_-_Self-Portrait_-_Google_Art_Project_%28454045%29.jpg/330px-Vincent_van_Gogh_-_Self-Portrait_-_Google_Art_Project_%28454045%29.jpg">
                <h3>Vincent Willem van Gogh 
                    <br>Seorang pelukis pascaimpresionis
                    <br>Lahir : 30 Maret 1853 Zundert, Belanda 
                    <br>Meninggal : 29 Juli 1890 (umur 37) Auvers-sur-Oise, Prancis <br> 
                    <br> Vincent Willem van Gogh adalah salah satu tokoh paling terkenal dan berpengaruh dalam sejarah seni di Barat. Dalam waktu lebih dari satu dasawarsa, ia menciptakan kurang lebih 2.100 karya seni, termasuk sekitar 860 lukisan minyak yang kebanyakan dibuat selama dua tahun terakhir kehidupannya. Karya-karya tersebut meliputi lukisan bentang alam, alam benda, potret, dan potret diri, dan memiliki ciri khas berupa warna yang tebal dan dramatis serta goresan kuas yang impulsif dan ekspresif.</h3>      
            </div>
        </div>
    </section>
    <section class="aboutme" id="aboutme">
        <div class="card-border2">
            <div class="card3">
                <img src="https://pm1.aminoapps.com/6450/12e44595042f4149d07487c7f48ae10b4a63d0bb_hq.jpg" alt="">
                <div class="text-card3">
                    <p>Hello Guys...
                        <br> Kenalin yh..
                        <br>
                        <br> Nama   : Brayen Tisra Sarira
                        <br> NIM    : 2209106076
                        <br> Kelas  : Informatika B'22
                        <br> Ttl    : Sangatta, 23 September 2004
                        <br> Hobi   : senang-senang
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="posttest.js"></script>
    <div class="footer" id="footer">
        <div class="socialMedia">
            <a href="https://www.instagram.com/brayen_tisra/" target="_blank" id="sosmed"><i class="fa-brands fa-instagram"></i> brayen_tisra</a>
        </div>
    </div>
</body>
</html>