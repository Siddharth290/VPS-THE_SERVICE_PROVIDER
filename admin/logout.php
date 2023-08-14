<?php
//PHP code  used to destroy the session and log out the user.
session_start(); //starts a new or resumes an existing session
session_unset(); //used to free all session variables
session_destroy();//destroys all data registered to a session

//user is redirected to the login page
header('location:login.php');

?>