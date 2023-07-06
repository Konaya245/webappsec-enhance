<?php
ini_set('session.gc_maxlifetime', 1800); // Set session timeout to 30 minutes
session_start();
<<<<<<< Updated upstream

header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline'; img-src 'self' data:;");

=======

>>>>>>> Stashed changes
?>