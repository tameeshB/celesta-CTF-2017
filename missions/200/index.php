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
	<title>Just Login</title>
        <link rel="stylesheet" type="text/css" href="miss3.css">
</head>
<body>
	<center><h1>Login</h1>
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

			$uname = mysqli_real_escape_string($conv,$_POST['uname']);
			$pwd = $_POST['pwd'];

			$query = "SELECT uname from m3_login where uname='$uname' and passwd='$pwd';";
			$result = mysqli_query($conv,$query);
			if($result) {
				if(mysqli_num_rows($result)>0) {
					echo "Logged In : Flag ".getFlag(200)."<br>";
					$success=true;
				} else {
					echo "Invalid Credentials";
				}
			} else {
				echo "Error in query <br>$query<br> ".mysqli_error($conv);
			}
		}
	if(!$success){
	?>

	<form id='#' method='post'>
		<br>
		<input type='text' name='uname' value='admin' placeholder='Username'><br><br>
		<input type='password' name='pwd' value='' placeholder='Password'><br><br>
		<input type='submit' value='Login'><br>
	</form>	
	<?php
	}
	?>
	</center>
</body>
</html>
