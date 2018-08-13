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
$email = $_POST["e-mail"];
$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];

$state = 0;
//1 means email already in use
//2 means invalid YU email
//3 means passwords dont match
		//setcookie('email', $email, time() + (86400 * 30)); // 86400 = 1 day
		
		if($pw1 != $pw2){
		$state = 3;
		}
		
		if (!eregi("@mail\.yu\.edu$",$email)){
			$state = 2;
		}
		
		$file = file_get_contents("newfile.txt");
		$users = explode(",",$file);
		$exists = false;
		
		for($i = 0; $i < count($users); $i++){
			if($i%2==0){
			
			if($users[$i]==$email)$state = 1;
			
				//$exists = true;
				
			}
		}
		
		
		
		
		
		function createCookies($email,$pw1){
			$_SESSION['email'] = $email;
			$_SESSION['pw'] = $pw1;
		}
		
?>		
		
<?php  	if($state == 0){
			
			echo "<p>A confirmation link has been sent to your e-mail. 
					 It may take a minute to receive. 
					 You may close this window and go open up that email.</p>";
		
			createCookies($email,$pw1);
	
			$msg =  "
				Thank your for registering!
				Here is your verifiaction link http://yutradecircle.com/newuser.php
			";
			mail($email, 'Trade_Circle_Confirmation', $msg);
		}
?>

<?php  	if($state == 1){
			echo "<p>E-mail already in use.</p>
				  <p><a href='index.html'>click here to go back to the login page</a></p>";
		}
?>

<?php  	if($state == 2){
			echo "<p>You can only sign up with a YU email. (example@mail.yu.edu)</p>
				  <p><a href='index.html'>click here to go back to the login page</a></p>";
		}
?>

<?php  	if($state == 3){
			echo "<p>Your passwords did not match.</p>
				  <p><a href='index.html'>click here to go back to the login page</a></p>";
		}
?>		

</body>

</html>		