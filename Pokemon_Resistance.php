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
        Function Name: getName
        Function Doc: return name
        Function Variables:
    */
    public function getName(){
        return $this->type->getName();
    }

    /*
        Function Name: getValue
        Function Doc: return value
        Function Variables:
    */
    public function getValue(){
        return $this->value;
    }
}

?>
