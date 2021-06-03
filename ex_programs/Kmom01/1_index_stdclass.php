<?php

/*I PHP finns en fördefinierad klass som heter stdClass. Med hjälp av den kan
vi skapa ett tomt objekt via operatorn new.
*/

$object = new stdClass();
var_dump($object);

/*
Objekten vi skapar är mutable och kan förändra sin struktur över sin levnadstid.
Ett objekt som är immutable är motsatsen och där kan man inte lägga till eller
ta bort attribut från objektet. Immutable objekt följer en fast mall som klassen erbjuder.
Mutable objekt kan förändras och medlemmar kan läggas till eller tas bort.

Vår instans av stdClass är mutable och vi kan lägga till två properties.
*/

$object->age = 42;
$object->details = function() {
    echo "Hi, I'm an object!";
};

echo ($object->details)() . " " . $object->age;
var_dump($object);

/* Konstruktionen ($object->details)() är lite speciell i sammanhanget,
men låt det bara vara så, det är inget vi fördjupar oss i just nu.

Så som mitt $object fungerar så är all information publik och nåbar
för den som använder objektet.
*/
