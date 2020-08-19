<?php
include "include/config.php";

$id = $_GET['nis'];

$query = mysqli_query("DELETE FROM siswa WHERE idSiswa=$id");
$sql = mysqli_query("DELETE FROM siswa_has_mata_pelajaran WHERE idSiswa=$id");
?>
<script>document.location.href="lihat_siswa2.php"</script>