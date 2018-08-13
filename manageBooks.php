<?php include("top.html");   ?>
<?php
	$un = $_COOKIE["e-mail"];
	$file = file_get_contents("textbook.txt");
	$book = explode("\n",$file);
	foreach($book as $var){
		$deets = explode(",",$var);
		if($deets[0]==$un){
		echo"<div id='book'><form action='deleteBook.php' method='get'><ol>
	
		<li>$deets[0]</li>
		<li>$deets[1]</li>
		<li>$deets[2]</li>
		<li>$deets[3]</li>
		<li>$deets[4]</li>
		<li>$deets[5]</li>
		<input type='hidden' name='book' value=$var />
		</ol><button type='submit'>Delete</button></form></div>";
		}
	}
?>
<?php include("bottom.html");   ?>