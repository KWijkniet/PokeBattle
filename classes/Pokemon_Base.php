<?php
abstract class Pokemon_Base {
    //store variables
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $resistance;

    /*
        Function Name: __construct
        Function Doc: function called when creating new class instance
        Function Variables: $name = (string) name of pokemon,
                            $energyType = (string) name of pokemon type,
                            $hitpoints = (int) amoung of HP (health),
                            $attacks = (array) array containing instances of the Pokemon_Attack class,
                            $weakness = (Pokemon_Weakness) class containing weakness data,
                            $resistance = (Pokemon_Resistance) class containing resistance data,
    */
    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->energyType = new Pokemon_Type($energyType);
        $this->hitpoints = $hitpoints;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
}

?>
