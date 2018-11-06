<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewsPostController extends AbstractController
{
    /**
     * @Route("/news/post", name="news_post")
     */
    public function index()
    {
        return $this->render('news_post/index.html.twig', [
            'controller_name' => 'NewsPostController',
        ]);
    }
}
