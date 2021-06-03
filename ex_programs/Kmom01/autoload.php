<?php
/**
 * Autoloader for classes.
 * När ett objekt skapas från en klass via new så kontrollerar PHP om klassen är känd eller ej.
 * Om klassen inte finns definierad sedan tidigare så anropas de autoloaders som finns.
 * Man kan lägga till en egen autoloader genom att definiera en funktion och registrera den som en autoloader.
 *
 * @param string $class the name of the class.
 */
spl_autoload_register(function ($class) {
    //echo "$class<br>";
    $path = "src/{$class}.php";
    if (is_file($path)) {
        include($path);
    }
});
