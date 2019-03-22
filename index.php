<?php

//include  files
require 'init.php';

//Create Pokemon
$pikachu = new Pikachu();
//Create Pokemon
$pikachu1 = new Pikachu();
//Create Pokemon
$charmeleon = new Charmeleon();

//create pokemon bag
$pokeBag = new PokeBag();

//add pokemon to bag
$pokeBag->add($pikachu);
$pokeBag->add($pikachu1);
$pokeBag->add($charmeleon);

//remove pokemon from bag
// $pokeBag->remove($charmeleon);
// $pokeBag->removeAll();

//show battle
echo '--------------------------------[STATS]--------------------------------<br />';
echo $pikachu->name . ' (' . $pikachu->hitpoints . 'HP)<br />';
echo '<br /><br />';
echo $charmeleon->name . ' (' . $charmeleon->hitpoints . 'HP)<br />';

echo '<br /><br />';
echo '--------------------------------[LOG]--------------------------------<br />';
echo $pikachu->attackEnemy($charmeleon, 'Electric Ring') . '<br />';
echo $charmeleon->name . ' (new HP: ' . $charmeleon->hitpoints . ')<br />';
echo '<br /><br />';
echo $charmeleon->attackEnemy($pikachu, 'Flare') . '<br />';
echo $pikachu->name . ' (new HP: ' . $pikachu->hitpoints . ')<br />';


//show bag + content
echo '<br /><br />';
echo '--------------------------------[PokeBag]--------------------------------<br />';
echo $pokeBag->getCount() . ' Pokemons in the PokeBag<br /><br />';
echo $pokeBag->getInfo();
?>
