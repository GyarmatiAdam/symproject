<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response as Something;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Something('First page');
    }
      /**
     * @Route("/other/{anything}")
     */
    public function show($anything)
    {
       # return new Something(sprintf('here sholud be the url name: %s', $anything));
       return $this->render('article/show.html.twig', [
        'title' => ucwords(str_replace('-', ' ', $anything)),
    ]);
    }
}