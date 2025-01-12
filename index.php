<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en" id="htmlPage">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toko Valorant</title>
        <link rel="icon" href="img/foto-logo.png"/>
        <link 
          rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous"
        />
        <style>
          html {
              scroll-behavior: smooth;
          }
          .icon-dark-mode {
              color: #00000; /* Warna untuk mode light */
              transition: color 0.3s;
          }

          [data-bs-theme="dark"] .icon-dark-mode {
              color: #ffffff; /* Warna untuk mode dark*/
          }

          .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            object-fit: cover;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            color: gray;
        }

          .checkbox {
            opacity: 0;
            position: absolute;
            display: none !important;
          }
          .checkbox-label {
            background-color: #111;
            width: 50px;
            height: 26px;
            border-radius: 50px;
            position: relative;
            padding: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
          }
          .bi-moon {color: whitesmoke;}
          .bi-brightness-high {color: rgb(255, 75, 75);}
          .checkbox-label .ball {
            background-color: #ffffff;
            width: 22px;
            height: 22px;
            position: absolute;
            left: 2px;
            top: 2px;
            border-radius: 50%;
            transition: transform 0.2s liniear;
          }
          .checkbox:checked + .checkbox-label .ball {
            transform: translateX(24px);
          }
          #checkbox {display: none;}

          .navbar-nav .nav-link {
            margin-right: 10px;
        }

          .navbar-brand {
        font-size: 18px; /* Atur ukuran teks pada navbar */
        color: gray;
          }
          
        </style>
    </head>
    <body>
        <!--nav begin-->
        <nav style="background-color: rgb(4, 212, 160); color: white; " class="navbar navbar-expand-lg  fixed-top">
        <div class="container" >
        <a class="navbar-brand" href="#">
                <img src="img/Logo.jpg" alt="Logo" width="60" height="60" class="d-inline-block align-text-center me-2">
                Toko Valorant
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#schedule">Schedule</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#aboutme">About Me</a>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                      </li>
                   </li>
                    <!-- Switch Dark Mode -->
                    <li class="nav-item">
                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label for="checkbox" class="checkbox-label">
                            <i class="bi bi-moon"></i>
                            <i class="bi bi-brightness-high"></i>
                            <span class="ball"></span>
                        </label>
                    </li>
                </ul>
            </div>
            
              </div>
            </div>
          </nav>
        <!--nav end-->
        <!--hero begin-->
        <br>
        <br>
        <br>
        <section id="hero" style="background-color:#000000 " class="text-center p-5 text-sm-start text-light">
          <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
              <img src="img/Logo.jpg" class="img-fluid" width="600">
              <div>
                <h1 class="fw-bold display-4">Selamat Datang Di Toko VALORANT </h1>
                <h4 class="lead display-6">Kami Menyediakan Semua yang kamu butuhkan tentang valorant &ensp;&ensp;&ensp;</h4>
                <h6>
                  <span id="tanggal"></span>
                  <span id="jam"></span>
                </h6>
              </div>
            </div>
          </div>
        </section>
        <!--hero end-->

        <!--article begin-->
          <section id="article" class="text-center p-5">
            <div class="container">
              <h1 class="fw-bold display-4 pb-3"><Article></Article></h1>
              <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                $sql = "SELECT * FROM article ORDER BY tanggal DESC";
                $hasil = $conn->query($sql); 

                while($row = $hasil->fetch_assoc()){
                ?>
                  <div class="col">
                    <div class="card h-100">
                      <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                      <div class="card-body">
                        <h5 class="card-title"><?= $row["Skins"]?></h5>
                        <p class="card-text">
                          <?= $row["isi"]?>
                        </p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary">
                          <?= $row["tanggal"]?>
                        </small>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?> 
              </div>
            </div>
          </section>
        <!-- article end -->
        <!-- section 1 -->
    <section id="product" class="py-5  " style="background-color: rgb(4, 212, 160); color: black;">
        <div class="container text-center">
          <h2><b>Skin Product</b></h2>
          <p>Penjelasan dari setiap  skin.</p>
          <br>
          <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                        <a href="https://valorantstrike.com/wp-content/uploads/2021/09/Valorant-Spectrum-Collection-Bulldog-HD-1536x864.jpg" target="_blank">
                            <img src="https://valorantstrike.com/wp-content/uploads/2021/09/Valorant-Spectrum-Collection-Bulldog-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                        </a>
                  <br>
                  <br>
                  <h5>Spectrum Bulldog</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                        <a href="https://valorantstrike.com/wp-content/uploads/2020/08/Valorant-Glitchpop-Collection-Judge-HD-1536x864.jpg" target="_blank">     
                            <img src="https://valorantstrike.com/wp-content/uploads/2020/08/Valorant-Glitchpop-Collection-Judge-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                        </a>
                  <br>
                  <br>
                  <h5>Glitchpop Judge</h5>
                    </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                    <div class="card">
                        <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                            <a href="https://i.pinimg.com/736x/1e/35/b4/1e35b4d6f52d2fbfa3cfa0fcb6d002d9.jpg" target="_blank"> 
                                    <img src="https://i.pinimg.com/736x/1e/35/b4/1e35b4d6f52d2fbfa3cfa0fcb6d002d9.jpg" class="card-img-top" alt="Product 6" >
                            </a>        
                            <br>
                            <br>
                            <h5>Reaver Vandal</h5>
                        </div>
                    </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                    <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                        <a href="https://valorantstrike.com/wp-content/uploads/2020/07/Valorant-Elderflame-Collection-Operator-HD-1536x864.jpg" target="_blank"> 
                                <img src="https://valorantstrike.com/wp-content/uploads/2020/07/Valorant-Elderflame-Collection-Operator-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                            </a>        
                        <br>
                        <br>
                        <h5>Elerflame Operator</h5>
                    </div>
                </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
                <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                    <a href="https://valorantstrike.com/wp-content/uploads/2020/07/Valorant-Elderflame-Collection-Vandal-HD-1536x864.jpg" target="_blank">     
                        <img src="https://valorantstrike.com/wp-content/uploads/2020/07/Valorant-Elderflame-Collection-Vandal-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                    </a>
                    <br>
                    <br>
                    <h5>Elderflame Reaver</h5>
                </div>
            </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
            <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                <a href="https://valorantstrike.com/wp-content/uploads/Valorant-Xenohunter-Collection-Knife-HD-1536x864.jpg" target="_blank"> 
                    <img src="https://valorantstrike.com/wp-content/uploads/Valorant-Xenohunter-Collection-Knife-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                </a>
                <br>
                <br>
                <h5>Xenohunter Knife</h5>
            </div>
        </div>
        </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                    <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc-FDA_nR3e5Ag0RC82bxaQofRCsWjXIGiRQ&s" target="_blank">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc-FDA_nR3e5Ag0RC82bxaQofRCsWjXIGiRQ&s" class="card-img-top" alt="Product 6" >
                        </a>
                        <br>
                        <br>
                        <h5>Oni Phantom</h5>
                    </div>
                </div>
              </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                            <a href="https://valorantstrike.com/wp-content/uploads/Valorant-Protocol-Collection-Sheriff-HD-1536x864.jpg" target="_blank">
                                <img src="https://valorantstrike.com/wp-content/uploads/Valorant-Protocol-Collection-Sheriff-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                            </a>
                        <br>
                        <br>
                        <h5>Protocol Sherrif</h5>
                    </div>
                </div>
              </div>
                <div class="col-md-4 mb-4">
                     <div class="card">
                        <div style="background-color: rgb(36, 117, 97); color: white; " class="card-body">
                            <a href="https://valorantstrike.com/wp-content/uploads/Valorant-RGX-11z-Pro-2-Collection-Spectre-HD-1536x864.jpg" target="_blank">
                                <img src="https://valorantstrike.com/wp-content/uploads/Valorant-RGX-11z-Pro-2-Collection-Spectre-HD-1536x864.jpg" class="card-img-top" alt="Product 6" >
                            </a>
                    <br>
                    <br>
                    <h5>RGX Spectre</h5>
                </div>
              </div>
              
  </div>
          </div>
        </div>
      </section>
        <!--gallery begin-->
         <section id="gallery"  class="text-center p-5 " style="background-color: rgb(4, 212, 160);">
          <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                    $hasil = $conn->query($sql);

                    $activeClass = "active";
                    while ($row = $hasil->fetch_assoc()) {
                        ?>
                        <div class="carousel-item <?= $activeClass ?>">
                            <div class="col">
                                <div class="card h-100 w-100">
                                    <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="Gallery Image" />
                                </div>
                            </div>
                        </div>
                        <?php
                        $activeClass = "";
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
         </div>
        </section>
        <!--gallery end-->
        <!--schedule-->
        <section id="schedule" class="text-center">
          <div class="container p-5">
              <h1 class="text-center mb-2 ">Schedule</h1>
              <div class="row row-cols-1 row-cols-md-4 g-3 justify-content-center">
                  <div class="col">
                      <div class="card h-100">
                          <div class="card-header bg-danger">
                              <h5 class="card-title text-white">SENIN</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  Rekayasa Perangkat Lunak
                                  <p>09:30 - 12:00 | H.5.6</p>
                              </li>
                              <li class="list-group-item">
                                Sistem Operasi
                                <p>12:30 - 15:00 | H.4.9</p>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card h-100">
                          <div class="card-header bg-danger">
                              <h5 class="card-title text-white">SELASA</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  Sistem Informasi
                                  <p>09:30 - 12:00 | H.4.2</p>
                              </li>
                              <li class="list-group-item">
                                  Basis Data (Praktek)
                                  <p>12:30 - 14:10 | D.3.M</p>
                              </li>
                              <li class="list-group-item">
                                Pendidikan Kewarganegaraan
                                <p>18:30 - 20:10 | Aula E.3.1</p>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card h-100">
                          <div class="card-header bg-danger">
                              <h5 class="card-title text-white">RABU</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  Logika Informatika
                                  <p>12:30 - 15:00 | H.4.10</p>
                              </li>
                              <li class="list-group-item">
                                  Probabilitas dan Statistik
                                  <p>15:30 - 18:00 | H.4.8</p>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card h-100">
                          <div class="card-header bg-danger">
                              <h5 class="card-title text-white">KAMIS</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  Basis Data (Teori)
                                  <p>07:00 - 08:40 | H.5.1</p>
                              </li>
                              <li class="list-group-item">
                                  Pemrograman Berbasis Web
                                  <p>08:40 - 10:20 | D.2.J</p>
                          </ul>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card h-100">
                          <div class="card-header bg-danger">
                              <h5 class="card-title text-white">JUMAT</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  Free
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col">
                      <div class="card h-100">
                          <div class="card-header bg-danger">
                              <h5 class="card-title text-white">SABTU</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">Free</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
        <!--schedule-->
        <!--about me-->
        <section id="aboutme" style="background-color:rgb(38, 116, 96);" class=" text-center p-5 ">
          <div class="container">
              <div class="d-lg-flex flex-md-row align-items-center justify-content-evenly">
                  <img
                      src="https://down-id.img.susercontent.com/file/id-11134207-7r98y-lzo7ufkkzdgo60"
                      alt="default"
                      class="img-fluid rounded-circle"
                      width="300"
                  />
                  <div class="p-2">
                      <p class="text-md-start">A11.2023.15158</p>
                      <h1 class="fw-bold display-4 text-md-start">Kent Pradana Diharto</h1>
                      <h5 class="lead text-md-start">Program Studi Teknik Informatika</h5>
                      <a
                          href="https://portal.dinus.ac.id/" target = "_blank"
                          class="text-md-start text-decoration-none text-dark "
                          ><h5>Universitas Dian Nuswantoro</h5></a>
                  </div>
              </div>
          </div>
      </section>
        <!--about me-->
        <!--footer begin-->
        <footer class="text-center p-5">
    <a href="https://www.instagram.com/__ymiya/profilecard/?igsh=YzBpNTQwZzMzNm16"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
    <a href="https://wa.me/+6285385159100"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
    <a href="https://x.com/i/flow/login"><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
    <br>
    <br>
    <div>
        Kent Pradana Diharto &copy; 2024
    </div>
</footer>
        <!--footer end-->
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"
        ></script>
        <script type="text/javascript">
          window.setTimeout("tampilWaktu()", 1000);

          function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
          }
        </script>
        <script>
          const html = document.getElementById("htmlPage");
          const checkbox = document.getElementById("checkbox")
          checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
              html.setAttribute("data-bs-theme", "dark");
            } else {
              html.setAttribute("data-bs-theme", "light");
            }
          });
        </script>

      
    </body>
</html>