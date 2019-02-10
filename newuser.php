<?php
session_start();

if(isset($_POST["add"])){

$newusername=$_POST['newuser']; // Get the name of new user
$userfile = fopen("users.txt","r");
$path=sprintf("/home/myusername/%s", $newusername); // Get the path of new user's file folder

$id = False; // Direct to next page only when the value of this variable is true

$linenum = 1;

while( !feof($userfile) ){ // Read the file line by line
  if ($newusername == trim(fgets($userfile))) {
			$id = True; // Change the value to true when username matches with any one of them in the text file
			break;
		}
		else {
			$linenum++; // If the username doesn't match with the current line, move to next line
		}
}

if($id == True){
  echo "This name has been used";
} else {
  file_put_contents("users.txt", "\n", FILE_APPEND);
  file_put_contents("users.txt", $newusername, FILE_APPEND); // Write the name of new user into txt file
	if(!file_exists($path)) {
    mkdir($path); // Create a new file folder for this new user
  }
  header('Location: main.html');
  exit;
}
}
?>
