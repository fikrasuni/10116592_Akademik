<?php
include "include/config.php";

$kelas = $_GET['kelas'];
$semester = $_GET['semester'];
$tahun = $_GET['tahun'];
?>
<!DOCTYPE html>
<head>
<title>Sistem Informasi Akademik Sekolah</title>
<link rel="stylesheet" href="css/screen.css" type="text/css"/>
</head>
<body> 

<div id="page-top-outer">    


<div id="page-top">

  <div id="logo">
  <a href=""><img src="images/shared/logo.png" width="156" height="40" alt="" /></a>
  </div>


</div>


</div>

<div class="nav-outer-repeat"> 

<div class="nav-outer"> 

    <div class="nav">
    <div class="table">
    
    <ul class="select"><li><a href="index.php"><b>Home</b></a>
    </li>
    </ul>
    
    <div class="nav-divider">&nbsp;</div>
    
    <ul class="select">
      <li><a href="#"><b>Akademik</b></a>
    <div class="select_sub">
      <ul class="sub">
         <?php
     if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){
     ?>     <li><a href="input_nilai2.php">Input Nilai Siswa</a></li>
        <?php
        }
        ?>
        <li><a href="lihat_nilai2.php">Lihat Nilai Siswa</a></li>
        <li><a href="lihat_siswa2.php">Data Siswa</a></li>
        <li><a href="input_siswa2.php">Tambah Siswa Baru</a></li>
      </ul>
    </div>
    </li>
    </ul>
        
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    </div>


</div>
<div class="clear"></div>

</div>


  <div class="clear"></div>
 
<div id="content-outer">

<div id="content">  
<h2 align="center">Input Nilai Peserta Didik Kelas <?php $kls = mysqli_fetch_array(mysqli_query("SELECT nama FROM ruang_kelas WHERE idRuang_Kelas = $kelas")); echo $kls['nama']; ?></h2><hr />
<h3 align="center">
Semester : <?php echo $semester; ?><br />
Tahun Ajaran : <?php echo $tahun; ?>
</h3>

<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="isi_nilai2.php" method="post">
<input type="hidden" name="kelas" value="<?php echo $kelas; ?>" />
<input type="hidden" name="semester" value="<?php echo $semester; ?>" />
<input type="hidden" name="tahun" value="<?php echo $tahun;?>" />
<table width="436" height="231" border="0" align="center" style="margin:20px">
  <tr>
    <td width="111" height="48">Nama Siswa </td>
    <td width="14">:</td>
    <td width="297"><select name="nama" id="nama">
	<option value="">-Nama Siswa-</option>
	<?php 
	$baris = mysqli_query("SELECT nama, idSiswa FROM siswa WHERE kelas = '$kls[nama]'");
	  while ($siswa = mysqli_fetch_array($baris)){
	  echo "<option value=\"$siswa[idSiswa]\">$siswa[nama]</option>";
	}
	?>
    </select>    </td>
  </tr>
  <tr>
    <td>Mata Pelajaran </td>
    <td>:</td>
    <td><select name="pelajaran" id="pelajaran">
        <option value="">-Pilih Pelajaran-</option>
    <?php 
	$pilih = mysqli_query("SELECT idmata_pelajaran FROM mata_pelajaran_has_ruang_kelas WHERE idRuang_Kelas = '$kelas'");  
	while($ambil = mysqli_fetch_array($pilih)){
		$hajar = mysqli_query("SELECT nama FROM mata_pelajaran WHERE idmata_pelajaran = '$ambil[idmata_pelajaran]'");
	  	$pl = mysqli_fetch_array($hajar);
	  	echo "<option value=\"$ambil[idmata_pelajaran]\">$pl[nama]</option>";
	}
	?>
      </select>    </td>
  </tr>
  <tr>
    <td height="52">Nilai</td>
    <td>:</td>
    <td><select name="afektif" id="afektif">
	<option value="">Afektif</option>
	<?php for($i=0;$i<=100;$i++){echo "<option>$i</option>";}?>
    </select>
	&nbsp;
      <select name="komulatif" id="komulatif">
	  <option value="">Komulatif</option>
	  <?php for($i=0;$i<=100;$i++){echo "<option>$i</option>";}?>
      </select>
	 &nbsp;
      <select name="psikomotorik" id="psikomotorik">
	  <option value="">Psikomotorik</option>
	  <?php for($i=0;$i<=100;$i++){echo "<option>$i</option>";}?>
      </select>      </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td></tr></table>
</div>
       
<div id="footer">
  <div id="footer-left">Sistem Informasi Sederhana Sekolah</div>

</div>
</body>
</html>