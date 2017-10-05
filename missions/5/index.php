<?php
require('../../flagcontroller.php');
mustLogin();
?>
<html>
<head><title>Bookmark sharing site</title>
<link rel="stylesheet" type="text/css" href="miss5.css">
</head>
<body><br>
	<center><h1>Bookmark share!</h1><br><br>
<?php
if(isset($_POST['key']) && !empty($_POST['key'])) {
	if($_POST['name']=="admin1" && $_POST['key']=='ou5y385twr2oi9258iwjr24')
		{echo "Flag: ".getFlag(5)."<br>";die();}
	else
		echo "Invalid Input<br>";
}
?>
<div class="cont">
	<div id="login" style="border: #000000 solid 2px;padding:30px;">
	Admin Login: <br>
<br>
<form action='#' method="POST">
	<input type='text' name='name' placeholder='admin1' value="admin1" autocomplete="off"><br><br>
	<input type='password' name='key' placeholder='Key'><br><br>
	<input type='submit' value='Test'> <br><br>
</form>
</div>
</div><br><br><br>
<hr width="50%"><br>
<!-- <form action='#' method="POST">
	<input type='text' name='name' placeholder='admin1' value="admin1" autocomplete="off"><br><br>
	<input type='password' name='key' placeholder='Key'><br><br>
	<input type='submit' value='Test'> <br><br>
</form> -->

</center>
</body>
</html>
