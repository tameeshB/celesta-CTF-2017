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
	<title>Key Login</title>
        <link rel="stylesheet" type="text/css" href="miss2.css">
</head>
<body style="padding:1em;">
	<center><h1>Key Login</h1></center><br>
<br>

<center><div id="Notice" style="padding:10px;background: #FF0000;color: #FFFFFF">*Maintainance Notice*<br>Access Keys leaked on this page are now removed.<br>Inconvenience caused due to the breach is regretted. </div>
<?php if(isset($_POST['key'])){if($_POST['key']=="ue9g24hygf2"){echo "Flag: ".getFlag(3);}else{echo "Invalid Key"; }}?><br>
	<form action="" method="POST">
		<input type="text" name="key" placeholder="key">
		<input type="submit"  Value="Submit" id="">
	</form>
</center>
<br><br>

<p>

</p>
</body>
</html>
