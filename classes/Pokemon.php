<?php
class Pokemon extends Pokemon_Base{
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
        if($this->hitpoints <= 0) { return; }

        //store executing attack
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
        $this->hitpoints = $this->hitpoints < 0 ? 0 : $this->hitpoints;
        return $damage . $message;
    }
}
?>
