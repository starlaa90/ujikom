<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysql_query("select * from petugas where username='$user' and password='$pass' ");
$cek=mysql_num_rows($sql);

    if ($cek>0)
    {
	    $data=mysql_fetch_array($sql);
	    if ($data['level']=='admin')
	    {
	    session_start();
	    $_SESSION['id_petugas']=$data['id_petugas'];
	    $_SESSION['user']=$user;
	    $_SESSION['nama']=$data['nama_petugas'];
	    $_SESSION['level']=$data['level'];
	    header('location:admin.php');
		}

		else if($data['level']=="petugas")
		{
		session_start();
	    $_SESSION['user']=$user;
	    $_SESSION['nama']=$data['nama_petugas'];
	    $_SESSION['level']=$data['level'];
	    header('location:petugas.php');	
		}	
    }
    else
    {
	    ?>
        <script type="text/javascript">
		alert ('Username atau Password tidak ditemukan');
		window.location="indexadmin.php";
	    </script>
<?php
    }
    ?>