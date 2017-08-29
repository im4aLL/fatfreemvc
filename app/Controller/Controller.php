<?php

namespace App\Controller;

class Controller {
    
    /**
     * Global framework object
     * 
     * @var object 
     */
    public $f3;
    
    
    /**
     * Constructor
     * 
     * @param type object
     */
    public function __construct($f3) {
        $this->f3 = $f3;
    }
}
