<?php
 ini_set('display_errors', '1');     # don't show any errors...
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
if(isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['url']) && !empty($_POST['url']) && isset($_GET['saveto']) && $_GET['saveto']=="text_".$_SESSION['id'].".txt"){

	// Open the text file
	$f = fopen("txts/".$_GET['saveto'], "a");
	$text = $_POST['title']."$==?$?==$".htmlspecialchars($_POST['url'])."\n";
	// Write text line
	fwrite($f, $text); 

	// Close the text file
	fclose($f);
}

	?>
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
<div style="width:30%;padding:10px;color: #FFFFFF;background-color: #FF0000;">Admin approves bookmarks at hourly intervals before they get shared.</div>
<br><br><br>
<hr width="50%"><br>
<form action='index.php?saveto=<?php echo "text_".$_SESSION['id'].".txt";?>' method="POST">
<h3>Add new Bookmark</h3><br>
	<input type='text' name='title' placeholder='Title' autocomplete="off">
	<input type='text' name='url' placeholder='url'>
	<input type='submit' value='Test'> <br><br>
</form>
<br><br>
<table border="1" sortable width="50%" cellpadding="10px">
	<tr  style="padding: 10px">
		<td>Title</td>
		<td>Url</td>
	</tr>
	<?php
		if ($handle = fopen("txts/text_".$_SESSION['id'].".txt", "r")) {
		    while (($line = fgets($handle)) !== false) {
		    	$dat=explode("$==?$?==$", $line);
			echo "<tr><td>".$dat[0]."</td>";
			echo "<td>".$dat[1]."</td></tr>";
		        
		    }

		    fclose($handle);
		} else {
			echo "<tr><td>No bookmarks yet</td></tr>";
		} 
	?>
</table>
</center>
</body>
</html>
