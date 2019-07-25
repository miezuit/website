<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky")
     * @param Request $request
     * @return Response
     */
    public function luckyNumber(Request $request)
    {
        $number = rand(1, 100);

        return $this->render(
            'lucky.html.twig',
            ['luckyNumber' => $number]
        );
    }
}