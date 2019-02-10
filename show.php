<?PHP

session_start();

if(isset($_POST["show"])){
	$username = $_SESSION['username'];
	$path = sprintf("/home/myusername/%s", $username); // Get the path of this user's file folder
	$filelist = scandir("$path"); // Scan all files in this directory

	echo "Show all uploaded files: ";
	for($i = 2; $i < count($filelist); $i++){
		echo "<li>";
		echo $filelist[$i]; // Print all uploaded files in screen
	}
}
?>
