<?php 
// Check if mb string is enabled

// phpinfo();
// exit; // stop script below

mb_internal_encoding('UTF-8'); // lets the mb string which character encoding we want to work with
mb_http_output('UTF-8'); // html will be utf 

$string = "Дш фывффыв asd qeqwe ";

header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTF8 </title>
</head>
<body>
    <p> Uppercase : <?php echo strtoupper($string); ?></p>
    <!-- Uppercase : Дш фывффыв ASD QEQWE -->
    <p> String len: <?php echo strlen($string);  ?></p> 
    <!-- String len: 30 ??? -->

    <!-- MB extension -->
    <p> Uppercase : <?php echo mb_strtoupper($string); ?></p>
    <!-- Uppercase : ДШ ФЫВФФЫВ ASD QEQWE -->
    <p> String len: <?php echo mb_strlen($string);  ?></p> 
    <!-- String len: 21 -->
</body>
</html>
