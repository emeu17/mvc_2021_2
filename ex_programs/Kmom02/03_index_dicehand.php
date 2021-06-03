<?php
namespace Emeu17\Dice;

/**
 * Throw a hand of dices.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$hand = new DiceHand(5);
$hand->roll();

?><h1>Rolling a dicehand with five dices</h1>

<p><?= implode(", ", $hand->values()) ?></p>
<p>Sum is: <?= $hand->getSum() ?>.</p>
<p>Average is: <?= $hand->getSum()/5 ?>.</p>
