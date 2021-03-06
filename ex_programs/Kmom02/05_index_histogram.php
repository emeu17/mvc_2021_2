<?php

namespace Emeu17\Dice;

/**
 * Show off a histogram.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");


$rolls = $_GET["rolls"] ?? 6;

$dice = new DiceHistogram();

for ($i = 0; $i < $rolls; $i++) {
    $dice->roll();
}

?><h1>Display a histogram</h1>
<!--
<p><?= implode(", ", $dice->getLastRoll()) ?></p> -->


<p><?= implode(", ", $dice->getHistogramSerie()) ?></p>

<p><?= implode(", ", $dice->getHistogramSerie()) ?></p>
<pre><?= $dice->printHistogram() ?></pre>
<pre><?= $dice->printHistogram(1, 6) ?></pre>
