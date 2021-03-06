<?php

namespace Mos\Guess;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Guess.
 */
class GuessCreateObjectTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties, use no arguments.
     */
    public function testCreateObjectNoArguments()
    {
        $guess = new Guess();
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $res = $guess->tries();
        $exp = 6;
        $this->assertEquals($exp, $res);
    }



    /**
     * Construct object and verify that the object has the expected
     * properties, use only first argument.
     */
    public function testCreateObjectFirstArgument()
    {
        $guess = new Guess(42);
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $res = $guess->tries();
        $exp = 6;
        $this->assertEquals($exp, $res);

        $res = $guess->number();
        $exp = 42;
        $this->assertEquals($exp, $res);
    }



    /**
     * Construct object and verify that the object has the expected
     * properties, use both arguments.
     */
    public function testCreateObjectBothArguments()
    {
        $guess = new Guess(42, 7);
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $res = $guess->tries();
        $exp = 7;
        $this->assertEquals($exp, $res);

        $res = $guess->number();
        $exp = 42;
        $this->assertEquals($exp, $res);
    }


    /**
     * Construct object and verify that making a guess
     * results in the correct return string
     */
    public function testMakeGuessLow()
    {
        $guess = new Guess(42);
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $lowNo = 5;
        $res = $guess->makeGuess($lowNo);
        $exp = "to low...";
        $this->assertEquals($exp, $res);
    }

    /**
     * Construct object and verify that making a guess
     * results in the correct return string
     */
    public function testMakeGuessHigh()
    {
        $guess = new Guess(42);
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $highNo = 50;
        $res = $guess->makeGuess($highNo);
        $exp = "to high...";
        $this->assertEquals($exp, $res);
    }

    /**
     * Construct object and verify that making a guess
     * results in the correct return string
     */
    public function testMakeGuessCorrect()
    {
        $guess = new Guess(42);
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $correctNo = 42;
        $res = $guess->makeGuess($correctNo);
        $exp = "correct!!!";
        $this->assertEquals($exp, $res);
    }

    /**
     * Construct object and verify that making a guess
     * results in the correct return string
     */
    public function testNoGuessLeft()
    {
        $guess = new Guess(42, 0);
        $this->assertInstanceOf("\Mos\Guess\Guess", $guess);

        $res = $guess->makeGuess(1);
        $exp = "no guesses left.";
        $this->assertEquals($exp, $res);
    }

    public function testGuessException()
    {
        $this->expectException(GuessException::class);
        $guess = new Guess(42);
        $guess->makeGuess(102);
    }
}
