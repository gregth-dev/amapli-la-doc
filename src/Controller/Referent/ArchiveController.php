<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class ArchiveController extends AbstractController
{
    /**
     * @Route("/archive/contrat/producteur/archiver", name="referent_archive_producer_contract_archive")
     */
    public function archiveProducerContract()
    {
        return $this->render('pages/referent/archive/archive_contract_producer.html.twig');
    }

    /**
     * @Route("/archive/contrat/producteur/listing", name="referent_archive_producer_contract_listing")
     */
    public function listingProducerContract()
    {
        return $this->render('pages/referent/archive/listing_contract_producer.html.twig');
    }

    /**
     * @Route("/archive/contrat/producteur/consulter", name="referent_archive_producer_contract_read")
     */
    public function readProducerContract()
    {
        return $this->render('pages/referent/archive/read_contract_producer.html.twig');
    }

    /**
     * @Route("/archive/contrat/adherent/archiver", name="referent_archive_member_contract_archive")
     */
    public function archiveMemberContract()
    {
        return $this->render('pages/referent/archive/archive_contract_member.html.twig');
    }

    /**
     * @Route("/archive/contrat/adherent/listing", name="referent_archive_member_contract_listing")
     */
    public function listingMemberContract()
    {
        return $this->render('pages/referent/archive/listing_contract_member.html.twig');
    }

    /**
     * @Route("/archive/contrat/adherent/consulter", name="referent_archive_member_contract_read")
     */
    public function readMemberContract()
    {
        return $this->render('pages/referent/archive/read_contract_member.html.twig');
    }

    /**
     * @Route("/archive/contrat/adherent/paiements", name="referent_archive_member_contract_payments")
     */
    public function paymentsMemberContract()
    {
        return $this->render('pages/referent/archive/payments_contract_member.html.twig');
    }
}
