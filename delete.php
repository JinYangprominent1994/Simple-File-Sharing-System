<?php
session_start();

if (isset($_POST["delete"])){

  $delete = $_POST["deletefile"]; // Get the name of file that user want to delete

  if(unlink('/home/myusername/'.$_SESSION['username'].'/'.$delete)){
    header("Location: page.html"); // If delete successfully, the page would jump to page.html
    exit;
  } else {
    header('Location:error.html'); // If error occurs, the page would jump to error.html
    exit;
  }
}

?>
