<?php 

$user = $_POST['uid'];
$pass = $_POST['passid'];

$prelist = file_get_contents('mysqlkeywordlist.txt');
$list = explode(" ", $prelist);
#echo "Size : ".sizeof($list)."<br>";

$falseness = 0;

$userbig = strtoupper($user);
$passbig = strtoupper($pass);
#$prelist=array('select','where','drop','union','in');

	foreach ($list as $word ) {
		
		#echo $word." ".$usersmall." ".$passsmall."<br>";
		if (strpos($userbig,$word) !== FALSE) {
			$falseness = $falseness + 2;
		}
		if (strpos($passbig,$word) !== FALSE) {
			$falseness = $falseness + 2;
		}
	}


if(preg_match("/'/u", $user)) {
	$falseness = $falseness + 10;
}
if(strpos($user,';') !==false) {
	$falseness = $falseness + 9;
}

if(preg_match("/'/u", $pass)) {
	$falseness = $falseness + 10;
}
if(strpos($pass,";") !==false) {
	$falseness = $falseness + 9;
}




if ($falseness < 10) {

	$url = 'http://' . $_SERVER['HTTP_HOST'].':8080';           
	$url .= '/bank/action.php?u='.$user.'&p='.$pass;         
	header('Location: ' . $url, true, 302);   
}
else {
	$url = 'http://' . $_SERVER['HTTP_HOST'].':80';           
	$url .= '/unauthorised.php?falseness='.$falseness;         
	header('Location: '.$url);
	echo $falseness."<br>";
	echo "You are unauthorised user<br>Your IP has been logged";
}
?>
