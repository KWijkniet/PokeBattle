<?php
abstract class Pokemon_Base {
    //store variables
    protected $id;              //ID is needed for the PokeBag. this makes sure each pokemon is unique
    protected $name;
    protected $energyType;
    protected $hitpoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $resistance;

    /*
        Function Name: __construct
        Function Doc: Maxic get returns requested data
        Function Variables: $variable = (string) name of variable to return
    */
    public function __get($variable){
        return $this->$variable;
    }

    /*
        Function Name: __construct
        Function Doc: Maxic get returns requested data
        Function Variables: $variable = (string) name of variable to return
    */
    public function generateID(){
        return uniqid();
    }

    /*
        Function Name: attackEnemy
        Function Doc: return attack message
        Function Variables: $enemy = (Pokemon_Base) class of enemy pokemon,
                            $attackName = (string) name of pokemon attack
    */
    public function attackEnemy($enemy, $attackName){
        //check if pokemon is still in the game
        if($this->hitpoints <= 0) { return ''; }

        //get and store executing attack
        $attack = $this->findAttack($attackName);
        //check if attack is not found (then return)
        if($attack == null) { return ''; }

        return $this->name . ' Attacked ' . $enemy->name . ' And Did ' . $enemy->takeDamage($this, $attack);
    }

    /*
        Function Name: findAttack
        Function Doc: return Pokemon_Attack based on if pokemon contains attack with given name
        Function Variables: $attackName = (string) name of attack to be returned
    */
    public function findAttack($attackName){
        for($i = 0; $i < count($this->attacks); $i++){
            if($attackName == $this->attacks[$i]->name){
                return $this->attacks[$i];
            }
        }
        return null;
    }

    /*
        Function Name: takeDamage
        Function Doc: calculate damage and return damage done with message
        Function Variables: $enemy = (Pokemon_Base) class of enemy pokemon,
                            $attack = (Pokemon_Attack) class of executed attack
    */
    public function takeDamage($enemy, $attack){
        $damage = $attack->damage;
        $message;

        if($this->resistance->type == $attack->type){
            //resistance
            $message = ' Damage (It Was Super Effective)';
            $damage -= $this->resistance->value;
            $damage = $damage < 0 ? 0 : $damage;
        }else if($this->weakness->type == $attack->type){
            //weakness
            $message = ' Damage (It Was Effective)';
            $damage *= $this->weakness->multiplier;
        }else{
            //not resistance. not weakness
            $message = ' Damage (It Was Not So Effective)';
        }

        $this->hitpoints -= $damage;
        $this->hitpoints = $this->hitpoints < 0 ? 0 : $this->hitpoints;

        return $damage . $message;
    }
}

?>
