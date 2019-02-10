<?php

session_start();

if(isset($_POST["logout"])){
  session_destroy(); // If log out, clear all session
  header( 'Location: main.html' ); // After log out, the page would jump to login page
  exit;
}
?>
