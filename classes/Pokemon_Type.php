<?php

class Pokemon_Type {
    //store variables
    private $name;


    /*
        Function Name: __construct
        Function Doc: Maxic get returns requested data
        Function Variables: $variable = (string) name of variable to return
    */
    public function __get($variable){
        return $this->$variable;
    }
}

?>
