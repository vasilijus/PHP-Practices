<?php 

namespace TWITTER;

class Client {
    
    public $name;

    function __construct() {
        $this->name = "TwitterClient";
        echo $this->name;
    }
}

?>