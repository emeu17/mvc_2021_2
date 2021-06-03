<?php

namespace App\Controller;

use Emeu17\DiceBundle\Dice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    /**
     * @Route("/")
    */
    public function hello(): Response
    {
        return $this->render('message.html.twig', [
            'message' => "Hello and Welcome",
        ]);
    }

    /**
     * @Route("/dice_view")
    */
    public function helloWithArgument(): Response
    {
        $die = new Dice();
        return $this->render('dice_view.html.twig', [
            'die' => $die,
        ]);
    }
}
