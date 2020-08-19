<?php

if(!session_start()){
session_start();
}
//mengecek admin sudah login atau belum
if(!isset($_SESSION['admin']) && (($_SESSION['level']!="admin") || ($_SESSION['level']!="tu")) ){
?>
<script>document.location.href="login.php"</script>
<?php 
}
?>