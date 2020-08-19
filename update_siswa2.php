<?php
include "include/config.php";

$nislama = $_POST['id'];
$passlama = $_POST['pass'];
$password = $_POST['password'];

if($password=="*****"){
$sandi = $passlama; 
}else{
$sandi = md5($password);
}

$nis =$_POST['nis'];
$nama = ucwords($_POST['nama']);
$alamat = ucwords($_POST['alamat']);
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];

$hajar = mysqli_query("UPDATE siswa SET idSiswa='$nis', nama = '$nama', alamat = '$alamat', kelas = '$kelas', password = '$sandi' WHERE idSiswa = '$nislama'");
if(!$hajar){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="edit_siswa2.php?nis=<?php echo $nislama; ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_siswa2.php"</script><?php
}
?>