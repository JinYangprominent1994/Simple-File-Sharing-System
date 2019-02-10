<?php
session_start();

$username = $_GET["username"];
$_SESSION['username'] = $_GET["username"];
$userfile = fopen("users.txt", "r");

$id = False; // Direct to next page only when the value of this variable is true
$linenum = 1;

while( !feof($userfile) ){ // Read the file line by line

		if ($username == trim(fgets($userfile))) {
			$id = True; // Change the value to true when username matches with any one of them in the txt file
			break;
		}
		else {
			$linenum++; // If the username doesn't match with the current line, move to next line
		}
}

 if ($id == True) {
  header('Location: page.html'); // If login successfully, the page would jump to page.html
	exit;
} else {
  header("Location: Error.html"); // If error occurs, the page would jump to error.html
	exit;
}

fclose($file);

?>
