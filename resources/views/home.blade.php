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

<!-- akhir navbar -->

<section id="home">
    <div class="container-fluid pt-5">
        <div class="text-bg-white text-center pt-3">
            <img src="img/businessman-character-avatar-isolated_24877-60111.webp" alt="" width="200" class="img-thumbnail rounded-circle">
            <h2 class="fw-bold mt-3">Ayi Permana</h2>
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
            <p>{{ $portofolio->kategori}}</p>
        </div>
            <div class="col-md-4">
              <p> Diluar sekolah saya mempunyai hobi main motor dan suka bermain mobile legends, main motor membuat saya merasa senang dan sambil menikmati suasana bermain motor, sedangkan bermain mobile legends mmembuat saya dapat mengeluarkan semangat dan adrenaline yang tinggi kedua hobi hobi saya ini dapat membua saya menghilangkan stres </p>
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
        {{-- </div> --}}
      </div>
    </section>
    <section class="contact">
      <div class=" container p-5">
        <h3 class="fw-bold  bg-light text-center mb-3">Contact Me</h3>
        <div class="row justify-content-center">
          <div class="col-md-6">
              <form action="" method="post" id="form-contact">
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap <span></span></label>
                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap " aria-autocomplete="off">
                
              </div>
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Email <span></span></label>
                 <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" aria-autocomplete="off">
                
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">kirim</button>
            </div>
          </form>
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
       

    
    



        
            

            