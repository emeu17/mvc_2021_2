<?php

require_once(__DIR__.'/src/Person3.php');


$object = new Person3();
$object->setAge(31);
$object->setName("Emma");

echo $object->details();

echo "Name of person3: " . $object->getName();
var_dump($object);
