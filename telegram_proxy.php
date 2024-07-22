<?php
// Telegram link URL
$telegramLink = 'tg://resolve?domain=vegamoviegrp';

// Set appropriate headers
header('Content-Type: text/html');

// Output the Telegram link
echo "<style>body{font-family:Arial,sans-serif;background-color:#f0f0f0;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.frame-container{border:1px solid #ccc;border-radius:8px;overflow:hidden;box-shadow:0 0 10px rgba(0,0,0,.1);width:300px;height:100px}.telegram-link{display:block;padding:20px;text-align:center;text-decoration:none;color:#007bff;font-size:18px;font-weight:bold;background-color:#fff}.telegram-link:hover{background-color:#f0f0f0}</style><div class='frame-container'><a class='telegram-link' href='$telegramLink'>CLICK ME</a></div>";
?>
