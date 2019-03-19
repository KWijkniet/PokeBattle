<?php

class Pokemon_Resistance {
    //store variables
    private $type;
    private $value;

    /*
        Function Name: __construct
        Function Doc: set variables
        Function Variables: $type = (Pokemon_Type) type of resistance,
                            $value = (int) number of resistance,
    */
    public function __construct($type, $value){
        $this->type = new Pokemon_Type($type);
        $this->value = $value;
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
