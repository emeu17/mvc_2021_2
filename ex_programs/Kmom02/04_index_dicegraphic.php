<?php

namespace Emeu17\Dice;

/**
 * Throw some graphic dices.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");

$dice = new DiceGraphic();
$res = [];
for ($i = 0; $i < 6; $i++) {
    $res[] = $dice->roll();
}

?><h1>Rolling six graphic dices</h1>

<p><?= implode(", ", $res) ?></p>
<p>Sum is: <?= array_sum($res) ?>.</p>
<p>Average is: <?= round(array_sum($res) / 6, 1) ?>.</p>
