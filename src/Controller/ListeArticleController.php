<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListeArticleController extends AbstractController
{
    /**
     * @Route("/liste/article", name="liste_article")
     */
    public function index()
    {
        return $this->render('liste_article/index.html.twig', [
            'controller_name' => 'ListeArticleController',
        ]);
    }
}
