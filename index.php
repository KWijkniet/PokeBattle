<?php

//include  files
require 'Pokemon_Base.php';
require 'Pokemon_Type.php';
require 'Pokemon_Attack.php';
require 'Pokemon_Weakness.php';
require 'Pokemon_Resistance.php';

//Create Pokemon
$pikachu = new Pokemon_Base(
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
$charmeleon = new Pokemon_Base(
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

//show battle
echo '--------------------------------[STATS]--------------------------------<br />';
echo $pikachu->getName() . '<br />';
echo $pikachu->getHitPoints() . 'HP';
echo '<br /><br />';
echo $charmeleon->getName() . '<br />';
echo $charmeleon->getHitPoints() . 'HP';

echo '<br /><br />';
echo '--------------------------------[LOG]--------------------------------<br />';
echo $pikachu->attackEnemy($charmeleon, 'Electric Ring') . '<br />';
echo $charmeleon->attackEnemy($pikachu, 'Flare') . '<br />';

echo '<br /><br />';
echo '--------------------------------[STATS]--------------------------------<br />';
echo $pikachu->getName() . '<br />';
echo $pikachu->getHitPoints() . 'HP';
echo '<br /><br />';
echo $charmeleon->getName() . '<br />';
echo $charmeleon->getHitPoints() . 'HP';

?>
