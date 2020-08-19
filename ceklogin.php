<?php

require_once 'include/sambung.php';

//username dan password dikirim dari form
$myusername=str_replace("'","",$_POST['username']);
$mypassword=md5($_POST['password']);

$sql="SELECT * FROM administrator WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);
$count=mysqli_num_rows($result);

if($count==1){
$query = mysqli_query("UPDATE administrator SET current_login = now() WHERE username = '$myusername'");
session_start();
		$_SESSION['admin']=$myusername;
		$_SESSION['level']="admin";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}else{
echo "<script>alert('Login gagal!'); document.location.href=\"login.php\"</script>";
}
?>