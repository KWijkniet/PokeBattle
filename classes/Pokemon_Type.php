<?php

class Pokemon_Type {
    //store variables
    private $name;

    /*
        Function Name: __construct
        Function Doc: set variables
        Function Variables: $type = (Pokemon_Type) type of resistance,
                            $value = (int) number of resistance,
    */
    public function __construct($name){
        $this->name = $name;
    }

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
