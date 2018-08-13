	<?php include("top.html"); ?>
		
	<div id="wrapper">
		<div id='Heading'><p><h1>Trade Circle</h1></p></div>
		
		<div id="Menu">
		<ul>
		<li><a href='addBook.html'>Add a Post</a></li>
		<li><a href='manageBooks.php'>Manage Posts</a></li>
		<li><a href='index.html'>Sign Out</a></li>
		<li><?php
		$email=$_COOKIE['email'];
		echo $email;
?></li>
		</ul>
		</div>
		<div id="Content">


		<?php 
		$file = file_get_contents("textbook.txt");
		$book = explode("\n",$file);
		foreach($book as $var){
		if($var == "")continue;
		$deets = explode(",",$var);
		
		echo"<div id='Inventory'>
			<img src='textbook.gif' alt='taco'/>
			<ol>
			<li>$deets[1]</li>
			<li>$deets[2]</li>
			<li>$deets[3]</li>
			<li>$deets[4]</li>
			<li>$deets[0]</li>
			</ol>
			</div>";}?>
		</div>
<?php include("bottom.html"); ?>