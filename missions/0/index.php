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
	<title>Get Flag</title>
	<link rel="stylesheet" type="text/css" href="miss0.css">
</head>
<body>
	<br>
	<center><h1>Simple Bonus!</h1><br></center><br><br>
	<script type="text/javascript">
	function done () {
		var key=document.getElementById("key").value;
		if(key=="yipeeeeeeeeee") {
			document.getElementById("keyhere").innerHTML="Flag is "+<?php echo '"'.getFlag(0).'"';?>;
		}
		else {
			alert("Wrong Key");
		}
		
	}</script>
	<br>
	<div class="cont">
	<input type='text' id='key' placeholder='Enter Key'><br><br>
	<input type='button' onclick='done();' value='Give me Flag'> <br><br>
	<span id='keyhere' >
	</div>
</center>
</body>
</html>
