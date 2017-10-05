<?php
require('../../flagcontroller.php');
mustLogin();
?>
<html>
<head>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107604046-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107604046-1');
	</script>
	<title>Just dig in!</title>
	<link rel="stylesheet" type="text/css" href="miss1.css">
</head>
<body><center>
<div class="cont"><br><h1>Dig in!</h1><br><br><br><br>
	<?php
		if(isset($_POST['key'])){
			if($_POST['key']=="simple"){
				echo "Flag: ".getFlag(1)."<br><a href='../200'>Secret Question</a>";
				exit(1);
			}else{
				echo "Try again ;)";
			}
		}
	?><br>
	
Start here: <a href="https://goo.gl/YxPbFG" target="_blank">goo.gl/YxPbFG</a><br><br>
<!-- <img src="pic.png" alt="" height="200px"> -->
<form action="" method="POST">Enter Key:
	<input type="text" name="key"><br><br>
	<input type="submit" value="Submit">
</form>
</div></center>
</body>
</html>