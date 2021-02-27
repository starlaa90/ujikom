<?php
if(isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		

		case 'verifikasi_pengaduan':
		include 'verifikasi_pengaduan.php';
		break;

		case 'detail_pengaduan':
		include 'detail_pengaduan_petugas.php';
		break;


	}
}
else
{
	?>
	 <h1>Halo<h2><b><?php echo $_SESSION['nama']; ?> !!
    <h3>Selamat Datang Di Aplikasi Pengaduan Masyarakat Desa Cikeas Udik</h3>
	<?php
	require 'koneksi.php';
	$sql=mysql_query("select * from pengaduan99 where status='0'");
	if ($cek=mysql_num_rows($sql))
	{
	?>
	<br>
	<br>
	<div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan :</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan Dari Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comment fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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

<?php
} }
?>