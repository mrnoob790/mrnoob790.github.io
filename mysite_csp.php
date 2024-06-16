<?php
//you can use any of below header, even url specific ones can be used. 
header("Content-Security-Policy:frame-ancestors 'none';");
// header("Content-Security-Policy:frame-ancestors 'self';");
?>
Hello
This page has is protected with frame-ancestors.