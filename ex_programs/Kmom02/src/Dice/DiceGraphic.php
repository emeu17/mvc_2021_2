<?php

declare(strict_types=1);

namespace Emeu17\Dice;

/**
 * Class GraphicalDice.
 */


/**
 * A graphic dice.
 */
class DiceGraphic extends Dice
{
    /**
     * @var integer SIDES Number of sides of the Dice.
     * Synligheten för en konstant i en klass är public, från och med PHP 7.1 kan man även ange private för en konstant.
     */
    const SIDES = 6;

    /**
     * Constructor to initiate the dice with six number of sides.
     * Konstruktionen parent:: är en referens till basklassen, den kan användas för att
     * specifikt kalla på de delar som ligger inuti basklassen, även om man i nuvarande klass
     * har gjort en överlagring på dem, som i detta fallet med konstruktorn.
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
    public function graphic()
    {
        return "dice-" . $this->getLastRoll();
    }
}
