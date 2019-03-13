<?php

class Pokemon_Type {
    //store variables
    private $name;

    /*
        Function Name: __construct
        Function Doc: set variables
        Function Variables: $name = (string) name of type
    */
    public function __construct($name){
        $this->name = $name;
    }

    /*
        Function Name: getName
        Function Doc: return name
        Function Variables:
    */
    public function getName(){
        return $this->name;
    }
}

?>
