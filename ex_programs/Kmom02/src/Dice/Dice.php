<?php

declare(strict_types=1);

namespace Emeu17\Dice;

/**
 * Class Dice.
 */
class Dice
{
    private $faces;
    public $roll = 0;

    public function __construct(int $faces=6)
    {
        $this->faces = $faces;
    }

    /**
     * Roll the dice and get the value of the last rolled dice.
     *
     * @return int as value of last rolled dice.
     */
    public function roll()
    {
        $this->roll = rand(1, $this->faces);

        return $this->roll;
    }

    /**
     * Get the value of the last rolled dice.
     *
     * @return int as value of last rolled dice.
     */

    public function getLastRoll()
    {
        return $this->roll;
    }
}
