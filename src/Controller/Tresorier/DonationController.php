<?php

namespace App\Controller\Tresorier;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tresorier")
 */
class DonationController extends AbstractController
{
    /**
     * @Route("/donation/listing", name="treasurer_donation_listing")
     */
    public function listing()
    {
        return $this->render('pages/tresorier/donation/listing.html.twig');
    }

    /**
     * @Route("/donation/ajouter", name="treasurer_donation_add")
     */
    public function add()
    {
        return $this->render('pages/tresorier/donation/add.html.twig');
    }

    /**
     * @Route("/donation/paiements", name="treasurer_donation_payments")
     */
    public function payments()
    {
        return $this->render('pages/tresorier/donation/payments.html.twig');
    }

    /**
     * @Route("/donation/modifier", name="treasurer_donation_edit")
     */
    public function edit()
    {
        return $this->render('pages/tresorier/donation/edit.html.twig');
    }

    /**
     * @Route("/donation/supprimer", name="treasurer_donation_delete")
     */
    public function delete()
    {
        return $this->render('pages/tresorier/donation/delete.html.twig');
    }
}
