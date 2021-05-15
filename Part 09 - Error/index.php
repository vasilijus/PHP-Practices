<?php 


// Report simple error in the runtime

// error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);

// To make sure they ar on screen
ini_set('display_errors', 1);

// Doing some erors

// Notices
$noneDeclared = 0; // Fixes 
var_dump( 10 + $noneDeclared );

// Warning
$city = new stdClass; // Fixes 
$city->name = "Fairytale";

// Strict 

class Foo
{
    // public function baa() {}
    public static function baa() {} // Fixes

    public static function none() {} // Fixes

}

Foo::baa();

// Error

Foo::none();

echo "Won't come to this";