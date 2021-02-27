<?php
require 'koneksi.php';

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysql_query("insert into masyarakat values('$nik','$nama','$username','$password','$telp')");
if ($sql)
{
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
        window.location="index.php";
    </script>
<?php
}

?>