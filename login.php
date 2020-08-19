<?php
session_start();
//mengecek kalo user sudah masuk atau belom
if(isset($_SESSION['admin']) && ($_SESSION['level']=="admin") ){
echo "<script>document.location.href=\"index.php\"</script>";
}else{
?>

<!DOCTYPE html>
<head>
<title>Sistem Informasi Akademik Sekolah</title>
<link rel="stylesheet" href="css/screen.css" type="text/css"/>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<div id="login-holder">

	<div id="logo-login">
		<a href="index.html"><img src="images/shared/logo.png" width="156" height="40" alt="" /></a>
	</div>
	
	<div class="clear"></div>
	
	<div id="loginbox">

	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<form name="form" method="post" action="ceklogin.php">
		<tr>
			<th>Username</th>
			<td><input type="text"  class="login-inp" name="username" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top">&nbsp;</td>
		</tr>
		<tr>
			<th></th>
			<td><input name="Submit" type="submit" class="submit-login" value="Submit"  /></td>
		</tr>
		</form>
		</table>
	</div>

	<div class="clear"></div>
	
 </div>

 
	<div id="forgotbox">
		<div id="forgotbox-text">Sistem akan segera mengirimkan password ke E-mail Anda</div>
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Alamat E-mail :</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input name="Submit" type="submit" class="submit-login" value="Submit"/></td>
		</tr>
		</table>
		</div>
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>

</div>
</body>
</html>
<?php } ?>