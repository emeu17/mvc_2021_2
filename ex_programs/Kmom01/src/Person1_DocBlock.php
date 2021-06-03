<?php
/**
 * Showing off a standard class with methods and properties.
 */
class Person1
{
    /**
     * @var string  $name   The name of the person.
     * @var integer $age    The age of the person.
     */
    public $name;
    public $age;


    /**
     * Print out details on the person.
     *
     * @return string with details on person.
     */
    public function details() {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }
}

/*
Koden och dess kommentarer kan sedan parsas av verktyg som
phpDocumentor (https://docs.phpdoc.org/latest/)
för att generera dokumentation av koden.


*/
