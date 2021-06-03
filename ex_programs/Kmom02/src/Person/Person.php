<?php

/**
 *  I deklarationen  av namespace så användare jag strukturen <vendor>\<namespace>.
 * I mitt fall är Mos vendor, leverantören av koden. Jag väljer att lägga vendor-namnet i mitt namespace,
 * då kan alla klasser jag själv skriver ligga under mitt eget namespace och undvika krockar med andra vendor, leverantörer.
 * Mitt <namespace> är Person som är ett rimligt namn på modulen (klassen) jag skapat. Klassens namn är nu Person.
 */

namespace Emeu17\Person;

/**
 * Showing off a standard class with methods and properties.
 */
class Person
{
    /**
     * @var string  $name   The name of the person.
     * @var integer $age    The age of the person.
     */
     private $name;
     private $age;

     // /**
     //  * Constructor to create a Person.
     //  *
     //  * @param string $name The name of the person.
     //  * @param int    $age  The age of the person.
     //  */
     // public function __construct(string $name, int $age)
     // {
     //     $this->name = $name;
     //     $this->age = $age;
     // }


     /**
      * Constructor to create a Person, flexible input.
      *
      * @param null|string $name The name of the person.
      * @param null|int    $age  The age of the person.
      */
     public function __construct(string $name = null, int $age = null)
     {
         $this->name = $name;
         $this->age = $age;
     }

     /*
     När ett objekt förstörs så anropas dess destruktor, om den finns.
     I PHP är det inte nödvändigt med en destruktor till ett objekt,
     om det inte finns allokerade delar som behöver förstöras
     för hand. PHP’s automatiska garbage hantering tar hand om och
     förstör det minnet som är kopplat till objektet.
     Referensen __METHOD__ är en inbyggd variabel i PHP som berättar
     namnet på den metod som nu exekveras.
     */

     /**
      * Destroy a Person.
      */
     public function __destruct()
     {
         echo __METHOD__;
     }


    /**
     * Print out details on the person.
     *
     * @return string with details on person.
     */
    public function details() {
        return "My name is {$this->name} and I am {$this->age} years old.";
    }

    /**
     * Set the age of the person.
     *
     * @param int $age The age of the person.
     *
     * @return void
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * Set the name of the person.
     *
     * @param string $name The age of the person.
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the age of the person.
     *
     * @return int as the age of the person.
     */
    public function getAge():int
    {
        return $this->age;
    }

    /**
     * Get the name of the person.
     *
     * @return string as the name of the person.
     */
    public function getName(): string
    {
        return $this->name;
    }


}
