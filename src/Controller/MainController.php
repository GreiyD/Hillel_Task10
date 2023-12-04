<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function first(): Response
    {
        return $this->render('main/index.html.twig', [
            'message' => 'the first rout',
        ]);
    }

    #[Route('/second', name: 'app_second')]
    public function second(): Response
    {
        return $this->render('main/index.html.twig', [
            'message' => 'the second rout',
        ]);
    }

    #[Route('/third', name: 'app_third')]
    public function third(): Response
    {
        return $this->render('main/index.html.twig', [
            'message' => 'the third rout',
        ]);
    }
}
