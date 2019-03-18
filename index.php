<?php

//include  files
require 'init.php';

//Create Pokemon
$pikachu = new Pokemon(
    /* Name */          'Pikachu',
    /* Type */          'Lightning',
    /* Health */        60,
    /* Attacks */       [
                            new Pokemon_Attack('Electric Ring', 'Lightning', 50),
                            new Pokemon_Attack('Pika Punch', 'Normal', 20),
                        ],
    /* Weakness */      new Pokemon_Weakness('Fire', 1.5),
    /* Resistance */    new Pokemon_Resistance('Fighting', 20)
);

//Create Pokemon
$charmeleon = new Pokemon(
    /* Name */          'Charmeleon',
    /* Type */          'Fire',
    /* Health */        60,
    /* Attacks */       [
                            new Pokemon_Attack('Head Butt', 'Normal', 10),
                            new Pokemon_Attack('Flare', 'Fire', 30),
                        ],
    /* Weakness */      new Pokemon_Weakness('Water', 2),
    /* Resistance */    new Pokemon_Resistance('Lightning', 10)
);

//create pokemon bag
$pokeBag = new PokeBag();
//add pokemon to bag
$pokeBag->add($pikachu);
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
