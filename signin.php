<?php
	session_start();
	$email = $_POST["e-mail"];
	$pw = $_POST["password"];
	
	$file = file_get_contents('newfile.txt');
	$words = explode(",",$file);
	$exists = false;
	
	
	for ($i=0;$i<count($words); $i++){
		if($i%2==0){
		if($words[$i] == $email && $words[$i+1] == $pw){
			$exists = true;
			setcookie('email', $email, time() + (86400 * 30)); // 86400 = 1 day
			header("Location: http://yutradecircle.com/TradeCircle.php");
		}
                }
	}
	
		if($exists == false){
			header("Location: error.html");
		}

?>