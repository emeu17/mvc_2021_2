<?php

require_once(__DIR__.'/src/Person1.php');

/*
I vårt main-program index_person1.php behöver vi nu inkludera klass-filen.
Sedan kan vi skapa ett objekt av klassen, lägga till värden i objektet
och anropa metoden details().

Funktioner som ligger som medlemmar i en klass brukar vi omtala som metoder.

Properties som ligger i klassen brukar vi även kalla medlemsvariabler.
*/

$object = new Person1();
$object->age = 42;
$object->name = "MegaMic";

echo $object->details();
var_dump($object);
