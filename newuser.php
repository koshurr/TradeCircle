<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Trade Circle</title>
</head>

<body>
<?php
		
	echo "Username: ".$_SESSION['email']." Password: ".$_SESSION['pw'];	

	$line = $_SESSION['email'].",".$_SESSION['pw'].",";
	
	$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
	fwrite($myfile, $line);
	fclose($myfile);
?>
<p>Registration Complete!</p>
<p>Join our circle now by <a href='TradeCircle.php'>clicking here</a></p>
</body>
</html>