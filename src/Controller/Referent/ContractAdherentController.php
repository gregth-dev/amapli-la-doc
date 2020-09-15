<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class ContractAdherentController extends AbstractController
{
    /**
     * @Route("/contractadherent/listing", name="referent_contracts_member_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/contracts_member/listing.html.twig');
    }

    /**
     * @Route("/contractadherent/ajouter", name="referent_contracts_member_add")
     */
    public function add()
    {
        return $this->render('pages/referent/contracts_member/add.html.twig');
    }

    /**
     * @Route("/contractadherent/modifier", name="referent_contracts_member_read")
     */
    public function read()
    {
        return $this->render('pages/referent/contracts_member/read.html.twig');
    }

    /**
     * @Route("/contractadherent/supprimer", name="referent_contracts_member_delete")
     */
    public function delete()
    {
        return $this->render('pages/referent/contracts_member/delete.html.twig');
    }

    /**
     * @Route("/contractadherent/multicontrats", name="referent_contracts_member_multi")
     */
    public function multi()
    {
        return $this->render('pages/referent/contracts_member/multi.html.twig');
    }

    /**
     * @Route("/contractadherent/lespaiements", name="referent_contracts_member_payments")
     */
    public function payments()
    {
        return $this->render('pages/referent/contracts_member/payments.html.twig');
    }

    /**
     * @Route("/contractadherent/remettrelespaiements", name="referent_contracts_member_check")
     */
    public function check()
    {
        return $this->render('pages/referent/contracts_member/check_payment.html.twig');
    }
}
