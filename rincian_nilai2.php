<?php 
include "include/config.php";
$nis = $_GET['nis'];
$kelas = $_GET['kelas'];
$tahun = $_GET['tahun'];
$kelasnya = "$kelas";

$pilih = mysqli_query("SELECT * FROM siswa WHERE kelas = '$kelas'");
$ambil = mysqli_query("SELECT * FROM siswa_has_mata_pelajaran WHERE idSiswa = '$nis' ORDER BY thn_ajaran DESC");
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
	<a href=""><img src="images/shared/logo.png" width="156" height="40"/></a>
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
<div align="right">
<h1><div align="center">Rekapitulasi Nilai  <?php if($kelas!=""){echo "Kelas $kelas";} ?></div></h1><br />
<table border="0" align="center">
<form action="rincian_nilai2.php" name="form" method="get" onSubmit="return valid(this)">
<input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
  <tr>
    <td>Pilih Siswa </td>
    <td>:</td>
    <td><select name="nis" id="nis">
	<option value="">-Pilih Nama-</option>
	<?php
	while($hasil = mysqli_fetch_array($pilih)){
	if($nis==$hasil['idSiswa']){
	echo "<option selected=\"selected\" value=\"$hasil[idSiswa]\">$hasil[nama]</option>";
	}else{
	echo "<option value=\"$hasil[idSiswa]\">$hasil[nama]</option>";
	}}
	?>
    </select></td>
	<td width="118"><input type="submit" value="Tampilkan Nilai" /></td>
  </tr>
 </form>
</table></div>
<hr>
<div align="center">
<table border="0">
  <tr>
    <td width="130">Nama Lengkap </td>
    <td width="11">:</td>
    <td width="207"><?php $sql = mysqli_fetch_array(mysqli_query("SELECT * FROM siswa WHERE idSiswa = '$nis'"));
	echo $sql['nama'];
	 ?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><?php echo $sql[kelas];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $sql[alamat];?></td>
  </tr>
</table><hr />
</div>
<br />
<link rel="stylesheet" href="css/style2.css" />
<body>
	<div class="page" id="tablewrapper">
		<div id="tableheader">
        	<div class="search">
                <select id="columns" onChange="sorter.search('query')"></select>
                <input type="text" id="query" onKeyUp="sorter.search('query')" />
            </div>
            <span class="details">
				<div>Hasil <span id="startrecord"></span>-<span id="endrecord"></span> dari <span id="totalrecords"></span></div>
        		<div><a href="javascript:sorter.reset()">reset</a></div>
        	</span>
        </div>
        <table width="1001" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="42"><h3>No</h3></th>
                  <th width="195"><h3>Mata Pelajaran</h3></th>
				  <th width="95"><h3>Semester</h3></th>
				  <th width="113"><h3>Tahun Ajaran</h3></th>
                  <th width="106"><h3>Nilai Afektif</h3></th>
                  <th width="119"><h3>Nilai Komulatif</h3></th>
				  <th width="141"><h3>Nilai Psikomotorik</h3></th>
				  <th width="112"><h3>Nilai Rata-rata</h3></th>
				  <?php  if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){ ?>
				  <th width="77"><h3>Pilihan</h3></th>
				  <?php } ?>
                </tr>
            </thead>
            <tbody>
			<?php
			$kls = join('+',explode(" ",$kelas));
			while ($nilai= mysqli_fetch_array($ambil)){
			$plj = mysqli_fetch_array(mysqli_query("SELECT nama FROM mata_pelajaran WHERE idmata_pelajaran = '$nilai[idmata_pelajaran]'"));
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$plj[nama]</td>
			<td>$nilai[semester]</td>
			<td>$nilai[thn_ajaran]</td>
			<td>$nilai[afektif]</td>
			<td>$nilai[komulatif]</td>
			<td>$nilai[psikomotorik]</td>
			<td>$nilai[rata]</td>
			<td>";
			
		 if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){
			echo "<a href=edit_nilai2.php?nis=$nilai[idSiswa]&pelajaran=$nilai[idmata_pelajaran]&semester=$nilai[semester]&tahun=$nilai[thn_ajaran]&kelas=$kls><img src=icon/update.png border=0></a>&nbsp;|
		<a href=hapus_nilai2.php?nis=$nilai[idSiswa]&pelajaran=$nilai[idmata_pelajaran]&semester=$nilai[semester]&tahun=$nilai[thn_ajaran]&kelas=$kls onClick=\"return confirm('Apakah Anda Yakin Akan Menghapus Data?')\"><img src=icon/hapus.png border=0></a></td>
            </tr>";
			}}
			?>
            </tbody>
      </table>
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1,true)" />
                    <img src="images/previous.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
                    <img src="images/next.gif" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
                    <img src="images/last.gif" width="16" height="16" alt="Last Page" onClick="sorter.move(1,true)" />
                </div>
                <div>
                	<select id="pagedropdown"></select>
				</div>
                <div>
                	<a href="javascript:sorter.showall()">view all</a>
                </div>
          </div>
			<div id="tablelocation">
            	<div>
                    <select onChange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Data Per Halaman</span>
                </div>
                <div class="page">Halaman <span id="currentpage"></span> dari <span id="totalpages"></span></div>
            </div>
        </div>
</div>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:0,
		sortdir:1,
		init:true
	});
  </script>
</div>      
<div id="footer">
	<div id="footer-left">Sistem Informasi Sederhana Sekolah</div>
</div>
</body>
</html>