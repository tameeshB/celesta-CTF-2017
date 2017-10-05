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
	<title>Flag</title>
</head>
<body style='background-color:yellow;'>
	<center><br><h1>It's free points</h1><br><br><br>
	<?php
	echo "Flag : ".getFlag(6)." <br>";
	?>
	</center>	
</body>
</html>