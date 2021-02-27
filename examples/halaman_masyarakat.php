<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
if (isset($_GET['url'])) {
    $url=$_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;
        
        case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;

        case 'detail_pengaduan';
            include 'detail_pengaduan.php';
            break;

        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;            
    }
} else {
    ?>
    <h1>Halo<h2><b><?php echo $_SESSION['nama']; ?> !!
    <h3>Selamat Datang Di Aplikasi Pengaduan Masyarakat Desa Cikeas Udik</h3>
    <br><br>
    <style>
      * {box-sizing:border-box}
      body {font-family: Verdana,sans-serif;}
      .mySlides {display:none}
    
        /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
    
      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
    
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
    
      /* The dots/bullets/indicators */
      .dot {
        height: 13px;
        width: 13px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 3s ease;
      }
    
      .active {
        background-color: #717171;
      }
    
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 3s;
        animation-name: fade;
        animation-duration: 3s;
      }
    
      @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
    
      @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
    
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
      }
    </style>
    
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 2</div>
        <img src="20180507_radarbogor_Berita-Utama_Kantor-Desa-Cikeas-Udik.jpg" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">2 / 2</div>
        <img src="WhatsApp-Image-2020-09-02-at-12.15.39-1260x710.jpeg" style="width:100%">
      </div>
    
      </div>
      <br>
    
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
      <script>
      var slideIndex = 0;
      showSlides();
    
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex> slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
      </script><br><br>
    
    <center>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h1 class="title">Form Tulis Pengaduan </h1>
              </div>
              <div class="card-body">
                <form action="simpan_pengaduan.php" method="post" class="forn-horizontal" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Tanggal Pengaduan</label>
                        <input type="text" class="form-control" disabled="" 
                        placeholder="Tanggal Pengaduan" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" 
                         placeholder="NIK" name="nik" value="<?php echo $_SESSION['nik']; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" disabled="" 
                        placeholder="Nama" name="nama" value="<?php echo $_SESSION['nama']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tulis Pengaduan</label>
                        <textarea class="form-control" rows="7" placeholder="Tulis Pengaduan" name="isi_laporan"></textarea>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-7 pr-md-1">
                        <label>Unggah Foto</label>
                        <input type="file" name="foto" color="white" class="form-control" 
                        accept=".jpg, .jpeg, .png, .gif"><br>
                        <label>*tipe yang bisa diupload adalah : .jpg, .jpeg, .png, .gif</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Kirim" class="btn btn-fill btn-primary">
                    </div>
                    
                </form>
              </div>  
              </div>
            </div>
    </center>
</body>
</html>
    <?php
    }
    ?>
          

