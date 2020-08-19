<?php 
include "include/config.php";
?>
<!DOCTYPE html>
<head>
<title>Sistem Informasi Akademik Sekolah</title>


<link rel="stylesheet" href="css/screen.css" type="text/css" />
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


<h2 align="center">Input Nilai Peserta Didik</h2><hr />
<br>
<table align="center" ><tr><td>
<form name="form" id="form" class="form" action="input2_nilai2.php" method="get">
<table width="436" height="231" border="0" align="center" style="margin:20px">
  <tr>
    <td width="111" height="48">Kelas</td>
    <td width="14">:</td>
    <td width="297"><select name="kelas" id="kelas">
	<option value="">-Pilih Kelas-</option>
	<?php 
	$baris = mysqli_query("SELECT * FROM ruang_kelas");
	  while ($kelas = mysqli_fetch_array($baris)){
	  echo "<option value=\"$kelas[idRuang_Kelas]\">$kelas[nama]</option>";
	}
	?>
    </select>    </td>
  </tr>
  <tr>
    <td height="48">Semester</td>
    <td>:</td>
    <td><select name="semester" id="semester">
        <option value="">-Pilih-</option>
        <option>Ganjil</option>
		<option>Genap</option>
      </select>    </td>
  </tr>
  <tr>
    <td height="52">Tahun Ajaran </td>
    <td>:</td>
    <td><select name="tahun" id="tahun">
	<option value="">-Pilih-</option>
	<?php for($i=2009;$i<=2015;$i++){$a = $i+1; echo "<option>$i-$a</option>";}?>
    </select>
	</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Input Nilai >>" />
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