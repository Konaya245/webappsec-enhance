<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: /login");
exit();
}
// Initialize the session
include 'session.php';
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to home page
header("location: /home");
exit;
?>