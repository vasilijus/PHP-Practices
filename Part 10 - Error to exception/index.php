<?php 

// Race condition
// COnverting Errors to Exceptions

// Send error to outpu

ini_set('display_errors',1);

set_error_handler( function( $errno, $errstr, $errfile, $errline ) {
    throw new ErrorException( $errstr, 0, $errno, $errfile, $errline);
});


set_error_handler( function( $errno, $errstr, $errfile, $errline ) {
    throw new ErrorException( $errstr, 0, $errno, $errfile, $errline);
});


try {
    // Read a file
    $handle = fopen('none.txt', 1);
} catch ( ErrorException $e) {
    echo "Cant find file ";
}

echo "Do something elese";

// // Read a file
// $handle = fopen('none.txt', 1);

// // If it didnt work print a statement 
// if (! $handle) {
//     echo "Cant find file ";
// }

// echo "Do something elese";