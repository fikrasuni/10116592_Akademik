<?php 
include "include/config.php";
$kelas = $_GET['kelas'];
$pilih = mysqli_query("SELECT nama FROM ruang_kelas");
$ambil = mysqli_query("SELECT * FROM siswa WHERE kelas = '$kelas'");
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
<div align="center">
<h1><div align="center">Rekapitulasi Nilai  <?php if($kelas!=""){echo "Kelas $kelas";} ?></div></h1><br /><hr>
<table border="0" align="center">
<form action="lihat_nilai2.php" name="form" method="get" >
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
	<option value="">-Pilih Kelas-</option>
	<?php
	while($hasil = mysqli_fetch_array($pilih)){
	if($kelas==$hasil['nama']){
	echo "<option selected=\"selected\">$hasil[nama]</option>";
	}else{
	echo "<option>$hasil[nama]</option>";
	}}
	?>
    </select></td>
	<td width="118"><input type="submit" value="Tampilkan Nilai" /></td>
  </tr>
 </form>
</table>
</div>

<hr><br />
<link rel="stylesheet" href="css/style.css" />
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
        <table width="709" border="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="53"><h3>No</h3></th>
                  <th width="120"><h3>NIS</h3></th>
                  <th width="231"><h3>Nama Siswa </h3></th>
                  <th width="213"><h3>Alamat</h3></th>
                  <th width="91" class=nosort><h3>Rincian Nilai</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			$kls = join('+',explode(" ",$kelas));
			while ($siswa = mysqli_fetch_array($ambil)){
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$siswa[idSiswa]</td>
			<td>$siswa[nama]</td>
			<td>$siswa[alamat]</td>
			<td><a href=rincian_nilai2.php?nis=$siswa[idSiswa]&kelas=$kls><img src=icon/rinci.png border=0></a></td>
            </tr>";
			}
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