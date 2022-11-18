<?php

namespace App\Controller;

use App\Repository\CacRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(CacRepository $cacRepository): Response
    {
        // $lastDate = $cacRepository->findOneBy(['createdAt' => 'DESC']);

        // if ( !$lastDate) {
        //     throw $this->createNotFoundException(
        //         'Aucune entrée dans la base'
        //     );
        // }

        return $this->render("home.html.twig", [
            'title' => "page d'accueil",
            'message' => 'Welcome to your new controller!',
            // 'lastDate' => $lastDate
        ]);
    }
}
