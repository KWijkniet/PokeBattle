<?php

class Pokemon_Weakness {
    //store variables
    private $type;
    private $multiplier;

    /*
        Function Name: __construct
        Function Doc: set variables
        Function Variables: $type = (Pokemon_Type) type of resistance,
                            $multiplier = (int) multiplier,
    */
    public function __construct($type, $multiplier){
        $this->type = new Pokemon_Type($type);
        $this->multiplier = $multiplier;
    }

    /*
        Function Name: __construct
        Function Doc: Maxic get returns requested data
        Function Variables: $variable = (string) name of variable to return
    */
    public function __get($variable){
        if($variable == 'type'){
            return $this->type->name;
        }
        return $this->$variable;
    }
}

?>
