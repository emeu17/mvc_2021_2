<?php



/* Vi återskapar samma klass vi hade nyss, men nu i en egen klass
som du sparar i filen src/Person1.php. Vi använder stora bokstäver
på filer som innehåller klasser */

class Person1
{
    public $name;
    public $age;

    public function details() {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }
}
