<?php

namespace App\Controller;

use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_home')]
    public function home(SerieRepository $serieRepository): Response
    {
        $series = $serieRepository->findBy([], ['popularity' => 'DESC', 'vote' => 'DESC'], 10);

        return $this->render('main/index.html.twig',[
            'series'=>$series
        ]);
    }
}
