<?php

class Pokemon_Attack {
    //store variables
    private $name;
    private $damage;
    private $type;

    /*
        Function Name: __construct
        Function Doc: set variables
        Function Variables: $name = (string) attack name,
                            $type = (Pokemon_Type) attack type,
                            $damage = (int) number of damage,
    */
    public function __construct($name, $type, $damage){
        $this->name = $name;
        $this->type = new Pokemon_Type($type);
        $this->damage = $damage;
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
