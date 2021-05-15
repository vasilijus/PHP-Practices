<?php 

namespace HTTP;

class Client {
    
    public $name;

    function __construct() {
        $this->name = "HTTPClient";
        echo $this->name;
    }
}

?>