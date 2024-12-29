<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>
    body {
  font-family: Arial, sans-serif;
  transition: background-color 0.3s, color 0.3s;
}

body.light-mode {
  background-color: #ffffff;
  color: #000000;
}

body.dark-mode {
  background-color: #121212;
  color: #ffffff;
}

  
.card {
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

.card img {
    height: 200px;
    object-fit: cover;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

.card-text {
    color: #666;
}

.theme-toggle {
  position: fixed;
  top: 70px;
  right: 20px;
  font-size: 1.5em;
  background-color: #ffffff; /* Default background for light mode */
  color: #000000;
  border: none;
  cursor: pointer;
  padding: 10px;
  border-radius: 50%;
  transition: background-color 0.3s, color 0.3s;
}

.theme-toggle.light-mode {
  background-color: #87CEEB;
  color: #000000;
}

.theme-toggle.dark-mode {
  background-color: #0b5572; /* Light blue background for dark mode */
  color: #ffffff;
}



</style>
<body>
    <!-- Navbar -->
    <nav style="background-color: rgb(4, 212, 160); color: white; " class="navbar navbar-expand-lg  fixed-top">
        <div class="container" >
            <a class="navbar-brand" href="#">Valorant Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#deskripsi">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li>
                        <button id="theme-toggle" class="theme-toggle btn-br ">
                            🌞
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br>
    <!-- Home Section -->
     <!-- deskripsi awal -->
     <section id="deskripsi" style="background-color:#000000 " class="text-center py-5 text-light">
        <div class="container py-5 ">
            <h1 class="fw-bold display-3 pb-3">Home</h1>
            <div class="row align-items-center py-3">
                <div class="col-md-5 text-center">
                    <img src="https://storage.googleapis.com/a1aa/image/Gf9oaFMAQHzzI635QqXl5BD3FOqckRiwSYlATGe12Gx32EzTA.jpg" alt="default" class="img-fluid mb-4" />
                </div>
                <div class="col-md-7 text-start">
                    <p class="fs-4">
                        Tempat yang nyaman bagi seluruhpemain valorant untuk membeli sebuah skin yang menarik dan bagus agar mampu menambah kemampua menembak kalian.
                    </p>
                </div>
            </div>
        </div>
    </section>

    < <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
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
      
      <!-- Section 3 -->
      <section id="slider-section" class="py-5">
        <div class="container">
          <h2 class="text-center mb-4">🔥 Best Skin 🔥</h2>
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://valorantstrike.com/wp-content/uploads/Valorant-RGX-11z-Pro-2-Collection-Spectre-HD-1536x864.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc-FDA_nR3e5Ag0RC82bxaQofRCsWjXIGiRQ&s" class="d-block w-100" alt="Slide 2">
              </div>
              <div class="carousel-item">
                <img src="https://valorantstrike.com/wp-content/uploads/Valorant-Protocol-Collection-Sheriff-HD-1536x864.jpg" class="d-block w-100" alt="Slide 3">
              </div>
              <div class="carousel-item">
                <img src="https://valorantstrike.com/wp-content/uploads/Valorant-Xenohunter-Collection-Knife-HD-1536x864.jpg" class="d-block w-100" alt="Slide 4">
              </div>
              <div class="carousel-item">
                <img src="https://valorantstrike.com/wp-content/uploads/2020/07/Valorant-Elderflame-Collection-Operator-HD-1536x864.jpg" class="d-block w-100" alt="Slide 5">
              </div>
            </div>
            
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!-- Section 4 -->
      <section id="Schedule">
      <div class="container my-4 ">
        <h1 class="typing-text text-center mb-2 ">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-3 justify-content-center" id="Schedule">
            <!-- Card 1 -->
            <br>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                        <div class="card header bg-danger text-center"> SENIN   
                        </div> 
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Etika Profesi
                                    <p style="color: black;" class="card-text text-center">16:20-18:00 | H.4.4</p>  
                            </li>
                            <li class="list-group-item text-center">Sistem Operasi
                                <p style="color: black;" class="card-text text-center">18:30-21:00 | H.4.8</p>  
                             </li>
                        </ul>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                        <div class="card header bg-danger text-center"> SELASA  
                        </div> 
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Pendidikan Kewarganegaraan
                                    <p style="color: black;" class="card-text text-center">12:30-13:30 | Kulino</p>  
                            </li>
                            <li class="list-group-item text-center">Probabilitas dan Stastitik
                                <p style="color: black;" class="card-text text-center">15:30-18:00 | H.4.9</p>  
                             </li>
                             <li class="list-group-item text-center">Kecerdasan Buatan
                                <p style="color: black;" class="card-text text-center">18:30-21:00 | H.4.11</p>  
                             </li>
                        </ul>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                        <div class="card header bg-danger text-center"> RABU   
                        </div> 
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Manajemen Proyek Teknologi Informasi
                                    <p style="color: black;" class="card-text text-center">15:30-18:00 | H.4.6</p>  
                            </li>
                        </ul>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                        <div class="card header bg-danger text-center"> KAMIS   
                        </div> 
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Bahasa Indonesia
                                    <p style="color: black;" class="card-text text-center">12:30-14:10 | Kulino</p>  
                            </li>
                            <li class="list-group-item text-center">Pendidikan Agama Islam
                                <p style="color: black;" class="card-text text-center">16:20-18:00 | Kulino </p>  
                             </li>
                             <li class="list-group-item text-center">Penambangan Data
                                <p style="color: black;" class="card-text text-center">18:30-21:00 | H.4.9</p>  
                             </li>
                        </ul>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                        <div class="card header bg-danger text-center"> JUMAT   
                        </div> 
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Pemograman Web Lanjut
                                    <p style="color: black;" class="card-text text-center">10:20-12:00 | D.2.K</p>  
                            </li>
                        </ul>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                        <div class="card header bg-danger text-center"> SABTU   
                        </div> 
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">FREE
                            </li>
                        </ul>
                </div>
            </div>
            <!-- Tambahkan lebih banyak kartu sesuai kebutuhan -->
        </div>
    </div>
</section>
    <br>
      <!-- Section 6 -->
      <section id="About" style="background-color:    rgb(38, 116, 96);" class="text-center p-5 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center text-md-start">
                    <div class="d-md-flex align-items-center gap-4">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98y-lzo7ufkkzdgo60" class="rounded-circle mb-4 m-4" width="360" alt="">
                        <div>
                            <p class="text-muted mb-0">
                                A11.2023.15158
                            </p>
                            <h1 class="fw-bold">Kent Pradana Diharto</h1>
                            <p class="text-muted mb-0">
                                Program Studi Teknik Informatika
                            </p>
                            <p><b>Universitas Dian Nuswantoro</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
      <!-- Section 7 -->
      <section id="contact" style="background-color:  rgb(4, 212, 160); " class="py-5  text-center ">
        <div class="container2">
          <h1><b>Kontak Kami</b></h1>
          <p>Segala pertanyaan bisa ditanyakan dengan menghubungi kami</p>
          <p>dengan klik tombol dibawah</p>
        </div>
      </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- script js -->

    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.typing-text', {
            strings: ["<b>Product Catalog</b>"],
        typeSpeed: 200,
        loop : true,
        });

        const toggleButton = document.getElementById('theme-toggle');
const body = document.body;

// Cek preferensi pengguna di Local Storage
if (localStorage.getItem('theme') === 'dark') {
  body.classList.add('dark-mode');
  toggleButton.classList.add('dark-mode');
  toggleButton.textContent = '🌜';
} else {
  body.classList.add('light-mode');
  toggleButton.classList.add('light-mode');
  toggleButton.textContent = '🌞';
}

// Tambahkan event listener pada tombol
toggleButton.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
  body.classList.toggle('light-mode');
  toggleButton.classList.toggle('dark-mode');
  toggleButton.classList.toggle('light-mode');

  // Ganti ikon berdasarkan mode
  if (body.classList.contains('dark-mode')) {
    toggleButton.textContent = '🌜';
    localStorage.setItem('theme', 'dark');
  } else {
    toggleButton.textContent = '🌞';
    localStorage.setItem('theme', 'light');
  }
});

    </script>

</body>
</html>
