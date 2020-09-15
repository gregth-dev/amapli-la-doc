<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/", name="email")
     */
    public function email()
    {
        return $this->render('pages/email/index.html.twig');
    }
}
