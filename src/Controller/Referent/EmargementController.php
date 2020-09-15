<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class EmargementController extends AbstractController
{
    /**
     * @Route("/emargement", name="referent_emargement")
     */
    public function edit()
    {
        return $this->render('pages/referent/emargement/edit.html.twig');
    }
}
