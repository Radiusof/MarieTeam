<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('home/home.html.twig', [
            'users' => $utilisateurRepository->findAll()
        ]);
    }
}
