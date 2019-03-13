<?php

class Pokemon_Base {
    //store variables
    private $name;
    private $energyType;
    private $hitpoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;

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

    /*
        Function Name: getName
        Function Doc: return name
        Function Variables:
    */
    public function getName(){
        return $this->name;
    }

    /*
        Function Name: getHitPoints
        Function Doc: return hitpoints
        Function Variables:
    */
    public function getHitPoints(){
        return $this->hitpoints;
    }

    /*
        Function Name: attackEnemy
        Function Doc: return attack message
        Function Variables: $enemy = (Pokemon_Base) class of enemy pokemon,
                            $attackName = (string) name of pokemon attack
    */
    public function attackEnemy($enemy, $attackName){
        $attack;
        for($i = 0; $i < count($this->attacks); $i++){
            if($attackName == $this->attacks[$i]->getName()){
                $attack = $this->attacks[$i];
            }
        }
        return $this->name . ' Attacked ' . $enemy->getName() . ' And Did ' . $enemy->takeDamage($this, $attack);
    }

    /*
        Function Name: takeDamage
        Function Doc: calculate damage and return damage done with message
        Function Variables: $enemy = (Pokemon_Base) class of enemy pokemon,
                            $attack = (Pokemon_Attack) class of executed attack
    */
    public function takeDamage($enemy, $attack){
        $damage;
        $message;

        if($this->resistance->getName() == $attack->getType()){
            //resistance
            $message = ' Damage (It Was Super Effective)';
            $damage = $attack->getDamage();
            $damage -= $this->resistance->getValue();
            $damage = $damage < 0 ? 0 : $damage;
        }else if($this->weakness->getName() == $attack->getType()){
            //weakness
            $message = ' Damage (It Was Effective)';
            $damage = $attack->getDamage();
            $damage *= $this->weakness->getMultiplier();
        }else{
            //not resistance. not weakness
            $message = ' Damage (It Was Not So Effective)';
            $damage = $attack->getDamage();
        }

        $this->hitpoints -= $damage;
        return $damage . $message;
    }
}

?>
