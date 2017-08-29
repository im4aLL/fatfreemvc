<?php

namespace App\Model;

use App\Library\Database;

class Model
{
    /**
     * Database class instance
     * 
     * @var instance
     */
    protected $db;
    
    /**
     * Table name
     * 
     * @var string
     */
    protected $table;
    
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
    public function __construct($f3)
    {
        $this->f3 = $f3;
        $this->db = new Database();
        
        $this->db->connect($this->f3->get('config.database'));
    }
    
    /**
     * Get all records from a table
     * 
     * @return array
     */
    public function all()
    {
        return $this->db->query('SELECT * FROM '.$this->table)->get();
    }
}
