<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;
use App\Repository\ArticleRepository;

class HomeController extends AbstractController
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $articles = $this->articleRepository->findLast(4);

        return $this->render('home/index.html.twig', [
            'articles' => $articles
        ]);
    }
}
