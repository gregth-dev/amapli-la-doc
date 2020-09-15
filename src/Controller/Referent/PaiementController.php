<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class PaiementController extends AbstractController
{
    /**
     * @Route("/paiement/listing/adherent", name="referent_payment_listing_member")
     */
    public function listingAdherent()
    {
        return $this->render('pages/referent/paiement/listing/adherent.html.twig');
    }
    /**
     * @Route("/paiement/listing/contrat", name="referent_payment_listing_contract")
     */
    public function listingContrat()
    {
        return $this->render('pages/referent/paiement/listing/contrat.html.twig');
    }
    /**
     * @Route("/paiement/listing/periode", name="referent_payment_listing_duration")
     */
    public function listingPeriode()
    {
        return $this->render('pages/referent/paiement/listing/periode.html.twig');
    }
    /**
     * @Route("/paiement/listing/liste", name="referent_payment_listing_all")
     */
    public function listingAll()
    {
        return $this->render('pages/referent/paiement/listing/liste.html.twig');
    }
    /**
     * @Route("/paiement/contrat", name="referent_payment_contract")
     */
    public function contract()
    {
        return $this->render('pages/referent/paiement/contrat.html.twig');
    }
    /**
     * @Route("/paiement/contrat/archive", name="referent_payment_archive_contract")
     */
    public function archiveContract()
    {
        return $this->render('pages/referent/paiement/archivecontrat.html.twig');
    }
    /**
     * @Route("/paiement/adhesion", name="referent_payment_subscription")
     */
    public function subscription()
    {
        return $this->render('pages/referent/paiement/adhesion.html.twig');
    }
    /**
     * @Route("/paiement/donation", name="referent_payment_donation")
     */
    public function donation()
    {
        return $this->render('pages/referent/paiement/donation.html.twig');
    }
    /**
     * @Route("/paiement/check", name="referent_payment_check")
     */
    public function check()
    {
        return $this->render('pages/referent/paiement/check.html.twig');
    }
}
