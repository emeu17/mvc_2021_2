<?php

namespace Emeu17\Dice;

/**
 * Throw some graphic dices.
 */
include(__DIR__ . "/config.php");
include(__DIR__ . "/autoload_namespace.php");


?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php

$dice = new DiceGraphic();
$rolls = 6;
$res = [];
$class = [];
for ($i = 0; $i < $rolls; $i++) {
    $res[] = $dice->roll();
    $class[] = $dice->graphic();
}

?><!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<h1>Rolling <?= $rolls ?> graphic dices</h1>

<p class="dice-utf8">
<?php foreach($class as $value) : ?>
    <i class="<?= $value ?>"></i>
<?php endforeach; ?>
</p>

<p>
    <i class="dice-sprite dice-2"></i>
    <i class="dice-sprite dice-3"></i>
    <i class="dice-sprite dice-6"></i>
    <i class="dice-sprite dice-1"></i>
    <i class="dice-sprite dice-4"></i>
    <i class="dice-sprite dice-4"></i>
</p>

</html>
