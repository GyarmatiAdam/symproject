<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response as Something;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        #return new Something('First page');
        return $this->render('article/homepage.html.twig');
    }
      /**
     * @Route("/other/{anything}", name="article_show")
     */
    public function show($anything)
    {
        $comments=['I ate a normal rock once. It did NOT taste like bacon!',
        'Woohoo! I\'m going on an all-asteroid diet!',
        'I like bacon too! Buy some from my site! bakinsomebacon.com',];

       # return new Something(sprintf('here sholud be the url name: %s', $anything));
       
       return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $anything)),
        'comments' => $comments,
    ]);
    }
}