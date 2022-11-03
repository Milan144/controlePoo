<?php

require_once __DIR__ . "/../src/app.php";
use App\Controller\Class\Animal;
use App\Controller\Class\Categorie;
use App\Controller\Class\Equine;
use App\Controller\Class\Rider;
use App\Controller\Class\Stable;
use App\Controller\Class\GameType;
use App\Controller\Class\Human;


// Creating the stable
$stable = new Stable("Stable de la paix", "1", "rue de la paix", 75000, "Paris");

// Creating 10 Riders
for ($i = 0; $i < 10; $i++) {
    $rider = new Rider("Rider $i", "1", "rue de la paix", 75000, "Paris", null, $stable, null);
    $stable->addRider($rider);
}

// Creating a new manager
$manager = new Manager($Jacques);


//Creating 15 Equine
for ($i = 0; $i < 15; $i++) {
    $equine = new Equine("Equine $i", "black", 100, null, "Poney");
    $stable->addEquine($equine);
}

// Assign a rider to an Equine
$equine->setRider($rider);


// Create an Event
$event = new Event(20, 20000);

// Subscribe a horse to an event
$event->subscribeEquine($equine);



// TEST ERRORS

// Try to create an Equine with a wrong color
try {
   $equine = new Equine("Equine $i", "blue", 100, null, "Poney");
} catch (Exception $e) {
   echo $e->getMessage();
}

// Try to create an Equine with a wrong category
try {
   $equine = new Equine("Equine $i", "black", 100, null, "Chat");
} catch (Exception $e) {
   echo $e->getMessage();
}

// Try to subscribe the same equine a second time to an event
try {
   $event->subscribeEquine($equine);
} catch (Exception $e) {
   echo $e->getMessage();
}



