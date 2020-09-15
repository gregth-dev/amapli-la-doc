<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/producteur")
 */
class ProducerController extends AbstractController
{
    /**
     * @Route("/mesadherents", name="producer_members")
     */
    public function members()
    {
        return $this->render('pages/producteur/members.html.twig');
    }

    /**
     * @Route("/meslivraisons", name="producer_deliveries")
     */
    public function deliveries()
    {
        return $this->render('pages/producteur/deliveries.html.twig');
    }

    /**
     * @Route("/editermeslivraisons", name="producer_edit_deliveries")
     */
    public function editDeliveries()
    {
        return $this->render('pages/producteur/edit_deliveries.html.twig');
    }

    /**
     * @Route("/mespaiements", name="producer_payments")
     */
    public function payments()
    {
        return $this->render('pages/producteur/payments.html.twig');
    }
}
