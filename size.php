<?php
$size = isset($_GET['size']) ? intval($_GET['size']) : 1024;
header("Content-Type: application/octet-stream");
header("Cache-Control: no-store");
echo str_repeat("A", $size);
?>
