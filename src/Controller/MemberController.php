<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/adherent")
 */
class MemberController extends AbstractController
{
    /**
     * @Route("/accueil", name="member_index")
     */
    public function index()
    {
        return $this->render('pages/adherent/index.html.twig');
    }
    /**
     * @Route("/compte", name="member_account")
     */
    public function account()
    {
        return $this->render('pages/adherent/account.html.twig');
    }
    /**
     * @Route("/mescontrats", name="member_contracts")
     */
    public function contracts()
    {
        return $this->render('pages/adherent/contracts.html.twig');
    }
    /**
     * @Route("/listing", name="member_listing")
     */
    public function listing()
    {
        return $this->render('pages/adherent/listing.html.twig');
    }
    /**
     * @Route("/meslivraisons", name="member_deliveries")
     */
    public function deliveries()
    {
        return $this->render('pages/adherent/deliveries.html.twig');
    }
    /**
     * @Route("/mespaiements", name="member_payments")
     */
    public function payments()
    {
        return $this->render('pages/adherent/payments.html.twig');
    }
    /**
     * @Route("/mespermanences", name="member_permanences")
     */
    public function permanences()
    {
        return $this->render('pages/adherent/permanences.html.twig');
    }
}
