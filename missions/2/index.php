<?php
require('../../flagcontroller.php');
mustLogin();
?>
<html>
<head>
	<title>File reader app</title>
	<link rel="stylesheet" type="text/css" href="miss1.css">
</head>
<body><center>
<div class="cont"><h1>Advanced file reading app</h1><br><br><br><br>
	<?php
		if(isset($_POST['key'])){
			if($_POST['key']=="oijw48ywrhw2490q8u2qjl13r8g"){
				echo "Flag: ".getFlag(200);
				exit(1);
			}else{
				echo "Try again ;)";
			}
		}
	?><br>
	
Challenge running at <a href="http://1.ctf.celesta.org.in/" target="_blank">1.ctf.celesta.org.in</a><br><br>
<!-- <img src="pic.png" alt="" height="200px"> -->
<form action="" method="POST">Enter Key:
	<input type="text" name="key"><br><br>
	<input type="submit" value="Submit">
</form>
</div></center>
</body>
</html>