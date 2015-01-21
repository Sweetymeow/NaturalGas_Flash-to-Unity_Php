<?php
// if(isset($_GET['key1'])){
// //	echo "Accept data: ";
// 	echo $_GET['key1'];
// //	echo "\n";
// }else{
// 	echo "error\n";
// }
// $saveKey = 0;
$flashKey = isset($_GET['key1']);
// $unityKey = isset($_GET['getkey']);

if ($flashKey) { // Get Data from Flash
	$saveKey = $_GET['key1'];
	$myfile = fopen("pipename.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $saveKey);
	$myfile = fopen("pipename.txt", "r") or die("Unable to open file!");
	echo "Accept key1 data: ";
	echo fgets($myfile);
	echo "\n";
	fclose($myfile);
}
// Get Data from Unity
if (isset($_GET['getkey'])) {
	//$myunityfile = fopen("pipename.txt", "r") or die("Unable to open file!");
	//echo fgets($myunityfile);
	//fclose($myunityfile);
	// $getKey = $_GET['getkey'];
	// $myunityfile= fopen("pipename.txt", "w") or die("Unable to open file!");
	// fwrite($myunityfile, $getKey);
	$myunityfile= fopen("pipename.txt", "r") or die("Unable to open file!");
	echo fgets($myunityfile);
	fclose($myunityfile);
	# code...
}
// else if($saveKey){
// 	echo "error";
// 	//echo "error\n";
// }





?>
