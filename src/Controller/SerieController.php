<?php

namespace App\Controller;

use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SerieController extends AbstractController
{
    #[Route('/series', name: 'series_list')]
    public function listSeries(SerieRepository $series): Response
    {
        $listSeries = $series->findAll();
        return $this->render("series/list_series.html.twig",[
           'list_serie'=>$listSeries
        ]);
    }
    #[Route('/serie/{id}', name:'serie_detail')]
    public function serieDetail(int $id, SerieRepository $serie): Response{
        $detailSerie = $serie->find($id);

        return $this->render("series/serie_detail.html.twig",[
            'serie'=>$detailSerie
        ]);
    }
   /* #[Route('')]
    public function tenBestSeries(SerieRepository $serieRepository) : Response{


        return $this->render('main/index.html.twig');

    }*/

}
