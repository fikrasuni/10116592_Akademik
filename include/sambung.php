 <?php
$host="localhost";
$user="root"; 
$password=""; 
$database="sekolah"; 


$koneksi=mysqli_connect($host,$user,$password); 

//memilih database yang akan dipakai
$select_db = mysqli_select_db($database, $koneksi);

if($koneksi !== false && $select_db !== false) {  //cek koneksi 
//echo "berhasil koneksi"; 
}else{ 
    echo "koneksi ke database gagal";
    exit();
} 
?>