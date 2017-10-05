<?php
session_start();
require("dbConnection.php");

function getFlags() {
	$flags  = array();
	$flags[0] = "3a57rqea2f";
	$flags[1] = "a4df8th3a2";
	$flags[2] = "le824hiuef";
	$flags[3] = "i8u48thiuq";
	$flags[4] = "824tuih7qe";
	$flags[5] = "74u3df24ad";
	$flags[6] = "249teworiq";
	$flags[10] = "4u20hqef8g";
	$flags[200] = "62h4thfhe2";
	return $flags;	
}

function getPoints($qid) {
	switch ($qid) {
		case 0:
			return 20;
			break;
		
		case 1:
			return 50;
			break;
		
		case 2:
			return 60;
			break;
		
		case 3:
			return 70;
			break;
		
		case 4:
			return 110;
			break;
		
		case 5:
			return 110;
			break;
		
		case 6:
			return 50;
			break;
		
		case 10:
			return 20;
			break;

		case 200:
			return 50;
			break;
		
		default:
			return 0;
			break;
	}
}

function getBaseFlag($qid) {
	return getFlags()[$qid];
}


function getFlagUser($qid,$userId) {
	$flag = getBaseFlag($qid);
	// echo "For ".$qid. " and ".$userId."\t".$flag."<br>";
	return sha1($flag . ":" . $userId);
}

function getFlag($qid) {
	if(!isLogin()) {
		echo "Please Login First";
		die();
		return "Please Login First";
	}
	$userId = $_SESSION['id'];
	$fflag = getFlagUser($qid,$userId);;
	return $fflag;
}

function isLogin() {

	if(isset($_SESSION['id']) && preg_match('/^[Cc][Ll][Ss][Tt][0-9]{4}$/',$_SESSION['id'])) {
		return true;
	}
	return false;
}
function mustLogin() {
	if(!isLogin()) {
		echo "User Must Login!";
		die();
	}
}

?>