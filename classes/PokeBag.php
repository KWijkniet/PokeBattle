<?php

class PokeBag {
    //store variables
    private $pokemons = array();

    /*
        Function Name: __get
        Function Doc: Maxic get returns requested data
        Function Variables: $variable = (string) name of variable to return
    */
    public function __get($variable){
        if($variable == 'type'){
            return $this->type->name;
        }
        return $this->$variable;
    }

    /*
        Function Name: add
        Function Doc: Add pokemon to pokemons list
        Function Variables: $pokemon = (Pokemon_Base) pokemon to be added
    */
    public function add($pokemon){
        if(count($this->pokemons) < 10 && !$this->findPokemon($pokemon)){
            $this->pokemons[] = $pokemon;
        }
    }

    /*
        Function Name: findPokemon
        Function Doc: return boolean based on if pokemon is already in bag
        Function Variables: $pokemon = (Pokemon_Base) pokemon to be checked
    */
    public function findPokemon($pokemon){
        for ($i=0; $i < count($this->pokemons); $i++) {
            if($this->pokemons[$i] == $pokemon){
                return true;
            }
        }
        return false;
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
        Function Name: removeAll
        Function Doc: removes all from pokemons
        Function Variables:
    */
    public function removeAll(){
        $this->pokemons = array();
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
        Function Name: getCount
        Function Doc: return count of current pokemons
        Function Variables:
    */
    public function getByName($name){
        for($i = 0; $i < count($this->pokemons); $i++){
            if($this->pokemons[$i]->name == $name){
                return $this->pokemons[$i];
            }
        }
        return null;
    }

    /*
        Function Name: getInfo
        Function Doc: return text with bag info
        Function Variables:
    */
    public function getInfo(){
        $result = "";
        for($i = 0; $i < count($this->pokemons); $i++){
            $name = (string)$this->pokemons[$i]->name;
            $hp = (string)$this->pokemons[$i]->hitpoints;
            $result .=  ($i + 1) . ': ' . $name . ' (' . $hp . 'HP)<br />';
        }
        return $result;
    }
}

?>
