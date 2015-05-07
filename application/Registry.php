<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Registry.php
 * -------------------------------------
 */

class Registry
{
    private static $_instancia;
    private $_data;
    
    //no se puede instanciar la clase
    private function __construct() {}
    
    
    /*    
    * The singleton method
    * Function to instantiate the object and use its methods
    */
    public static function getInstancia()
    {
        if(!self::$_instancia instanceof self){
            self::$_instancia = new Registry();
        }
        
        return self::$_instancia;
    }
    
    public function __set($name, $value) {
        $this->_data[$name] = $value;
    }
    
    public function __get($name) {
        if(isset($this->_data[$name])){
            return $this->_data[$name];
        }
        
        return false;
    }
    
     /*
    * Cloning avoid of Object. (Singleton Pattern)
    */
    public function __clone()
    {
        trigger_error("Invalid operation: You can not clone an instance of the class: ". get_class($this));
    }
    /*
     * Deserializing avoid an instance
     */
    public function __wakeup()
    {
        trigger_error("You can not deserialize an instance of the class:  ". get_class($this) ." class.");
    }
}
?>
