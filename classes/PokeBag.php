<?php

class PokeBag {
    //store variables
    private $pokemons = array();
    private $amount;

    /*
        Function Name: add
        Function Doc: Add pokemon to pokemons list
        Function Variables: $pokemon = (Pokemon_Base) pokemon to be added
    */
    public function add($pokemon){
        if(count($this->pokemons) < 10){
            $this->pokemons[] = $pokemon;
        }
    }

    /*
        Function Name: remove
        Function Doc: remove from pokemons based on given Pokemon_Base
        Function Variables: $pokemon = (Pokemon_Base) pokemon to be removed
    */
    public function remove($pokemon){
        $index = array_search($pokemon, $this->pokemons);
        unset($this->pokemons[$index]);
    }

    /*
        Function Name: removeOnIndex
        Function Doc: remove Pokemon_Base from pokemons based on given index
        Function Variables: $index = (int) position of Pokemon_Base to remove
    */
    public function removeOnIndex($index){
        unset($this->pokemons[$index]);
    }

    /*
        Function Name: getCount
        Function Doc: return count of current pokemons
        Function Variables:
    */
    public function getCount(){
        return count($this->pokemons);
    }

    /*
        Function Name: getText
        Function Doc: return text with bag info
        Function Variables:
    */
    public function getText(){
        $result = "";
        for($i = 0; $i < count($this->pokemons); $i++){
            $name = (string)$this->pokemons[$i]->getName();
            $hp = (string)$this->pokemons[$i]->getHitPoints();
            $result .=  ($i + 1) . ': ' . $name . ' (' . $hp . 'HP)<br />';
        }
        return $result;
    }
}

?>
