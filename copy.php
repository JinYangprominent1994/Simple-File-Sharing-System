<?php

session_start();

if(isset($_POST["copy"])){
  $username = $_SESSION['username']; // Get the name of user who want to copy file to other person
  $copyfile = $_POST['file']; // Get the name of file that user want to copy to other person
  $userreceive = $_POST['user']; //The name of user who would receive copied files
  $old_path = sprintf("/home/myusername/%s/%s", $username, $copyfile); // The old owner's file path
  $new_path = sprintf("/home/myusername/%s/%s", $userreceive,$copyfile); // The new owner's file path
  
  if (copy($old_path, $new_path)) {
    header('Location:page.html'); // If copy successfully, the page would jump to page.html
    exit;
  } else {
    header('Location:error.html'); // If error occurs, the page would jump to error.html
    exit;
  }
}
?>
