<?php

require_once(__DIR__.'/src/Person4.php');


$object = new Person4("MegaMic", 42);

echo $object->details();

echo "Name of person4: " . $object->getName();
var_dump($object);

?>

<p>Test att skapa object på olika sätt</p>
<?php

$object1 = new Person4("MegaMic", 42);
echo $object1->details();
var_dump($object1);

$object2 = new Person4("MegaMic");
echo $object2->details();
var_dump($object2);

$object3 = new Person4();
echo $object3->details();
var_dump($object3);
