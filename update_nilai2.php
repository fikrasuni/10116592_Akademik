<?php
include "include/config.php";

$kelas =$_POST['kelas'];
$kelas = mysqli_fetch_array(mysqli_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas = '$kelas'"));

$semester =$_POST['semester'];
$tahun =$_POST['tahun'];
$nis =$_POST['nama'];
$pelajaran =$_POST['pelajaran'];
$afektif =$_POST['afektif'];
$komulatif =$_POST['komulatif'];
$psikomotorik =$_POST['psikomotorik'];
$rata = ($afektif+$komulatif+$psikomotorik)/3;

$bos = mysqli_query("UPDATE siswa_has_mata_pelajaran SET afektif = '$afektif', komulatif = '$komulatif', psikomotorik = '$psikomotorik', rata = '$rata' WHERE idSiswa = '$nis' AND idmata_pelajaran = '$pelajaran' AND semester = '$semester' AND thn_ajaran = '$tahun'");
?>
<script>document.location.href="rincian_nilai2.php?nis=<?php echo $nis;?>&kelas=<?php echo $kelas['nama']?>"</script>