<?php

// Reading files from zip file

// composer require league/flysystem
// composer require league/flysystem "0.5.*"

// PHP Zip Functions 
// https://www.w3schools.com/php/php_ref_zip.asp

require './vendor/autoload.php';

// Then reference code in the application

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\zip as Adapter;

$filesystem = new Filesystem( new Adapter(__DIR__.'/ZippedFileTest.zip' ));

//output a list of file in the archive ( zip )
$contents = $filesystem->listContents();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($contents as $content): ?>
    <li>
        <?php $content['type']; ?>
    </li>
    <?php endforeach; ?>
</body>
</html>