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
	<title>Secure Login</title>
        <link rel="stylesheet" type="text/css" href="miss4.css">
</head>
<body>
	<center><h1>Secure Login</h1>
	<br>
	Hint 1: This mission is dependent on another mission.<br>
	<?php
	$success =false;
		if(isset($_POST['uname']) && isset($_POST['pwd'])) {
			$conv = mysqli_connect(DB_HOST,'user',"pswd","db");

			// Check connection
			if (mysqli_connect_errno())
			{
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  die();
			}

			//Secure
			$uname = mysqli_real_escape_string($conv,$_POST['uname']);
			$pwd = sha1($_POST['pwd']);
			$query = "SELECT uname from m4_login where uname='$uname' and passwd='$pwd';";


			$result = mysqli_query($conv,$query);
			if($result) {
				if(mysqli_num_rows($result)>0) {
					echo "Logged In : Flag ".getFlag(4)."<br>";
					$success=true;
				} else {
					echo "Invalid Credentials";
				}
			} else {
				echo "Unexpected Error!";
			}
		}
	if(!$success){
	?>
	<br>
	<form id='#' method='post'>
		<input type='text' name='uname' value='admin' placeholder='Username'><br><br>
		<input type='password' name='pwd' value=''  placeholder='Password'><br><br>
		<input type='submit' value='Login'><br>
	</form>	
	<?php
	}
	?>
</center>
</body>
</html>
