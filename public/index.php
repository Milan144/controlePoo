<?php

require_once __DIR__ . "/../src/app.php";
use App\Controller\Class\Animal;
use App\Controller\Class\Categorie;
use App\Controller\Class\Equine;
use App\Controller\Class\Rider;
use App\Controller\Class\Stable;
use App\Controller\Class\GameType;
use App\Controller\Class\Human;


// Creating 4 humans
$Jean = new Rider("Jean", "1 rue de la paix", "Paris", 75000, "France");

// Creating a new manager
$manager = new Manager($Jacques);

// Creating the stable and setting the manager
$stable = new Stable("Stable de la paix", "1", "rue de la paix", 75000, "Paris", $manager);


//Creating 4 Equine
$Equine1 = new Equine("Kiwi", "Bai", 100, $Jean);

// Adding the 4 Equine to the stable
$stable->addEquine($Equine1);
$stable->addEquine($Equine2);
$stable->addEquine($Equine3);
$stable->addEquine($Equine4);
