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
        Function Name: getName
        Function Doc: return name
        Function Variables:
    */
    public function getName(){
        return $this->name;
    }

    /*
        Function Name: getType
        Function Doc: return type
        Function Variables:
    */
    public function getType(){
        return $this->type->getName();
    }

    /*
        Function Name: getDamage
        Function Doc: return damage
        Function Variables:
    */
    public function getDamage(){
        return $this->damage;
    }
}

?>
