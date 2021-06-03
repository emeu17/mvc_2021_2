<?php

/*
 * De variabler, funktioner och klasser som definieras inom denna "namespace" är endast synliga där.
 * Vinsten är att man kan deklarera enheter som har samma namn, men om de befinner sig i
 * olika namespace så krockar de inte.
*/



//När vi nu vill skapa ett objekt av klassen Person, i filen index_namespace.php, så måste det ske med klassens absoluta namn, det finns ett par alternativ att göra detta.
// Ett alternativ är att skapa ett objekt genom att ange hela namespacet till klassen.
// $person = new \Mos\Person\Person();
//
// //Ett annat alternativ är att använda samma namespace som klassen har, i filen där jag jobbar, då hade det kunnat sett ut så här.
// namespace Mos\Person;
// $person = new Person();
//
// //Ytterligare ett alternativ är att använda use \Mos\Person\Person för att berätta vilken sökvägen, namespacet, är till klassen Person.
// use \Mos\Person\Person;
// $person = new Person();


/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$object = new \Emeu17\Person\Person("MegaMic", 42);
echo $object->details();
var_dump($object);
