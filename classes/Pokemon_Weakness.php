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
        Function Name: getName
        Function Doc: return name
        Function Variables:
    */
    public function getName(){
        return $this->type->getName();
    }

    /*
        Function Name: getMultiplier
        Function Doc: return multiplier
        Function Variables:
    */
    public function getMultiplier(){
        return $this->multiplier;
    }
}

?>
