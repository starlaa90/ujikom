<?php
require 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from masyarakat where username='$username' and password='$password' ");
$cek=mysql_num_rows($sql);

    if ($cek>0) {
        $data=mysql_fetch_array($sql);
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['nama']=$data['nama'];
        $_SESSION['nik']=$data['nik'];
        header('location:masyarakat.php');

    } else {
        ?>
    <script type="text/javascript">
        alert('Username Atau Password Tidak Diketahui');
        window.location="index.php";
    </script>
    <?php
    }
    ?>

