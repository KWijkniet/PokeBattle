<?php
class Pikachu extends Pokemon_Base{
    /*
        Function Name: __construct
        Function Doc: function called when creating new class instance
        Function Variables:
    */
    public function __construct(){
        $this->id = $this->generateID();
        $this->name = 'Pikachu';
        $this->energyType = new Pokemon_Type('Lightning');
        $this->hitpoints = 60;
        $this->health = 60;
        $this->attacks = [new Pokemon_Attack('Electric Ring', 'Lightning', 50),new Pokemon_Attack('Pika Punch', 'Normal', 20)];
        $this->weakness = new Pokemon_Weakness('Fire', 1.5);
        $this->resistance = new Pokemon_Resistance('Fighting', 20);
    }
}
?>
