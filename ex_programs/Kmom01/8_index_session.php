<?php
/**
 * Object in session.
 */

 include(__DIR__ . "/config.php");
 include(__DIR__ . "/autoload.php");

session_name("mosstud");
session_start();


if (!isset($_SESSION["person"])) {
    $_SESSION["person"] = new Person4("MegaMic", 42);
}

$person = $_SESSION["person"];
$age = $person->getAge();
$person->setAge($age + 1);
echo $person->details();
