<?php

declare(strict_types=1);

namespace App\Controller;

// use Emeu17\DiceBundle;
// use Emeu17\DiceBundle\Dice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for the index route.
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/")
    */
    public function indexView(): Response
    {
        // $psr17Factory = new Psr17Factory();

        return new Response(
            "Hello world, this is my new index page"
        );

        // $data = [
        //     "header" => "Index page",
        //     "message" => "Hello, this is the index page, rendered as a layout.",
        // ];
        //
        // $body = renderView("layout/page.php", $data);
        //
        // return $psr17Factory
        //     ->createResponse(200)
        //     ->withBody($psr17Factory->createStream($body));
    }

    // /**
    //  * @Route("/dice")
    // */
    // public function diceView(): Response
    // {
    //     // get the recent articles somehow (e.g. making a database query)
    //     // $articles = ['...', '...', '...'];
    //     $die = new Dice();
    //
    //     return $this->render('dice_display.html.twig', [
    //         'die' => $die
    //     ]);
    // }
}
