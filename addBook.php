<?php
$book = $_POST["book"];
$condition = $_POST["condition"];
$class = $_POST["class"];
$teacher = $_POST["teacher"];
$number = $_POST["number"];
$un = $_COOKIE['e-mail'];

$textbook = $un.",".$book.",".$condition.",".$class.",".$teacher.",".$number."\n";

for($j=0; $j<strlen($textbook); $j++){
	if($textbook[$j]==" "){
		$textbook[$j]="_";
	}
}


$myfile = fopen("textbook.txt", "a+") or die("Unable to open file!");
fwrite($myfile,$textbook);
echo fread($myfile,filesize("textbook.txt"));
fclose($myfile);
?>