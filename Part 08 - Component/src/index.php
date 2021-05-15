<?php 

namespace SergioBasic\Test;


use Another\Dependancy;

class Test{
    const FOO = 'bat';
    public $name = "asd";

    public function getSomething()
    {
        return "Getting something good";
    }
}

// ------------------------------------------------------------------------------------------------
// FOUND 3 ERRORS AFFECTING 2 LINES
// ------------------------------------------------------------------------------------------------
//  1 | ERROR | [x] End of line character is invalid; expected "\n" but found "\r\n"
//  1 | ERROR | [x] Whitespace found at end of line
//  5 | ERROR | [x] Opening brace of a class must be on the line after the definition
// ------------------------------------------------------------------------------------------------
// PHPCBF CAN FIX THE 3 MARKED SNIFF VIOLATIONS AUTOMATICALLY
// ------------------------------------------------------------------------------------------------
