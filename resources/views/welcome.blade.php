<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> my portofolio ayi permana</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        body{
            font-family: arial;
            background-color: #D5CEA3;
            }
            /* #3C2A21 */
    </style>
</head>
<body>
   <div class=" navbar navbar-expand-lg bg-primary text-white">
            <div class=" container-fluid">
            Ayi Permana
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label="toggle navigation"aria-controls="mynavbar" aria aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':''}}">Profil</a>
                    </li>

                    <li class="nav-item">
                        <a href="portofolio" class="nav-link {{ Request::segment(1)=='portofolio'?'active':''}}">Portofolio</a>
                    </li> 
                    <li class="nav-item">
                        <a href="home" class="nav-link {{ Request::segment(1)=='home'?'active':''}}">Home</a>

                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link {{ Request::segment(1)=='logout'?'active':''}}">Keluar</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>

<!-- akhir navbar -->

<section id="home">
    <div class="container-fluid pt-5">
        <div class="text-bg-white text-center pt-3">
          <img src="img/user.png" alt="" width="200" class="img-thumbnail rounded-circle">
            <h2>ayi permana</h2>
            <h2 class="fw-bold mt-3"></h2>
            <p class="fs-5">Student</p>
        </div>
     </div>  
  </section>
  <section id="about" class="pt-5">
    <div class="container">
      <div class="p-5 text-center">
        <h3 class="fw-bold mb-3">About Me</h3>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <p>hi nama saya ayi</p>
        </div>
            <div class="col-md-4">
              <p>hai nama saya ayi</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="home" class="pt-2">
      <div class="container">
        <div class="p-5 text-center">
          <div class="fw-bold mb-3"></div>
          <div class="row justify-content-center">
            <div class="col-md-2">
              <P></P>
            </div>
            <div class="col-md-2">
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="project" class="pt-5">
      <div class="container">
        <div class="p-5 text-bg-light text-center">
          <h3 class="fw-bold mb-3">My Projects</h3>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/hateemel.jpg" class="card-img-top" alt="project 1">
                <div class="card-body">
                  <p class="card-text">Pengertian(HTML)
                    HTML adalah bahasa standar pemrogaman yang digunakan untuk membuat halaman website, yang diakses melalui internet. Singkatan dari "Hypertext Markup Language" atau "bahasa markup".".</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/php photo.png" class="card-img-top" alt="project 2">
                <div class="card-body">
                  <p class="card-text">PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.

                    Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/laravel anyar.png" class="card-img-top" alt="project 3">
                <div class="card-body">
                  <p class="card-text">Apa Itu Laravel?
Laravel adalah framework berbasis bahasa pemrograman PHP yang bisa digunakan untuk membantu proses pengembangan sebuah website agar lebih maksimal. Dengan menggunakan Laravel, website yang dihasilkan akan lebih dinamis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <!-- link ig -->
    <div class="container-fluid">
      <footer class="py-3 my-3 borderd-top">
        <p class="text-center">&copy;2023 <a href="https://instagram.com/wowo_ez?igshid=zDdkNtziNTM=" target="_blank" class="fe-bold text-decoration-none">Ayi Permana</a></p>
         
      </footer>
    </div>



  </body>
  </html>