<?php
require 'koneksi.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=mysql_query("insert into pengaduan99(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$foto','$st')");
move_uploaded_file($file, "foto/".$foto);

if ($sql) 
{
    ?>
   <script type="text/javascript">
        alert('Data Berhasil Disimpan');
        window.location="masyarakat.php";
    </script>;

    <?php
}
 
?>

