<?php

namespace App\Controller;

use App\Repository\VoitureRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */


    public function index(VoitureRepository $voiturerepository): Response
    {
        $voitures = $voiturerepository->findAll();
        return $this->render('accueil/index.html.twig', [
            'voitures' => $voitures,
        ]);
    }
}
