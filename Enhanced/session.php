<?php
ini_set('session.gc_maxlifetime', 1800); // Set session timeout to 30 minutes
session_start();

header("Content-Security-Policy: default-src 'self' *.google.com ; script-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com/ ; img-src 'self' data:; font-src 'self' https://cdnjs.cloudflare.com/ https://fonts.gstatic.com ;");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("X-Content-Type-Options: nosniff");
?>