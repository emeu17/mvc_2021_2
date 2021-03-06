<?php

declare(strict_types=1);

namespace Emeu17\Dice;

/**
 * Class GraphicalDice.
 */


/**
 * A graphic dice.
 */
class GraphicalDice extends Dice implements DiceInterface
{
    /**
     * @var integer SIDES Number of sides of the Dice.
     */
    const SIDES = 6;

    /**
     * Constructor to initiate the dice with six number of sides.
     */
    public function __construct()
    {
        parent::__construct(self::SIDES);
    }

    /**
     * Get a graphic value of the last rolled dice.
     *
     * @return string as graphical representation of last rolled dice.
     */
    public function asString(): string
    {
        return "dice-" . (string) $this->getLastRoll();
    }
}
