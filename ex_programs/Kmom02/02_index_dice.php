<?php


/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$dice = new \Emeu17\Dice\Dice();

?>
<h1>Rolling dices</h1>

<?php
$sum = 0;
for ($i = 1; $i <= 6; $i++) {
    echo $i . ": " . $dice->roll() . "<br>";
    $sum += $dice->getLastRoll();
}

echo "<p>Sum: " . $sum . "</p>";
echo "<p>Average: " . $sum/6 . "</p>";

// var_dump($object);
