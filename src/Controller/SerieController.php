<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SerieController extends AbstractController
{
    #[Route('/series', name: 'series_list')]
    public function listSeries(): Response
    {
        //todo: allez chercher les série en BDD
        return $this->render("series/list_series.html.twig");
    }

}
