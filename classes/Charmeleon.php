<?php
class Charmeleon extends Pokemon_Base{
    /*
        Function Name: __construct
        Function Doc: function called when creating new class instance
        Function Variables:
    */
    public function __construct(){
        $this->id = $this->generateID();
        $this->name = 'Charmeleon';
        $this->energyType = new Pokemon_Type('fire');
        $this->hitpoints = 60;
        $this->health = $this->hitpoints;
        $this->attacks = [new Pokemon_Attack('Head Butt', 'Normal', 10), new Pokemon_Attack('Flare', 'Fire', 30)];
        $this->weakness = new Pokemon_Weakness('Water', 2);
        $this->resistance = new Pokemon_Resistance('Lightning', 10);
    }
}
?>
