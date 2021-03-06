<?php 
include "include/config.php";
$hasil=mysqli_query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<head>
<title>Sistem Informasi Akademik Sekolah</title>
<link rel="stylesheet" href="css/style.css" />
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
<h1><div align="center">Data Siswa</div></h1><br /><hr><br />
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
        <table class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="86"><h3>NIS</h3></th>
                  <th width="217"><h3>Nama</h3></th>
                  <th width="178"><h3>Alamat</h3></th>
                  <th width="143"><h3>Kelas</h3></th>
				  <th width="63" class=nosort><h3>Pilihan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($baris = mysqli_fetch_array($hasil)){
			echo"<tr>
			<td>$baris[idSiswa]</td>
			<td>$baris[nama]</td>
			<td>$baris[alamat]</td>
			<td>$baris[kelas]</td>
			<td>";
			
		 if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){
			echo "
			<a href=edit_siswa2.php?nis=$baris[idSiswa]><img src=icon/update.png border=0></a>&nbsp;|
			<a href=hapus_siswa2.php?nis=$baris[idSiswa] onClick=\"return confirm('Apakah Anda Yakin Akan Menghapus Siswa/i ini?')\"><img src=icon/hapus.png border=0></a></td>
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