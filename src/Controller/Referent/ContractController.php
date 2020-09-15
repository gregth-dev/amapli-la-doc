<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class ContractController extends AbstractController
{
    /**
     * @Route("/contractproducteur/listing", name="referent_contracts_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/contrats/listing.html.twig');
    }

    /**
     * @Route("/contractproducteur/ajouter", name="referent_contracts_add")
     */
    public function add()
    {
        return $this->render('pages/referent/contrats/add.html.twig');
    }

    /**
     * @Route("/contractproducteur/modifier", name="referent_contracts_edit")
     */
    public function edit()
    {
        return $this->render('pages/referent/contrats/edit.html.twig');
    }

    /**
     * @Route("/contractproducteur/consulter", name="referent_contracts_read")
     */
    public function read()
    {
        return $this->render('pages/referent/contrats/read.html.twig');
    }

    /**
     * @Route("/contractproducteur/supprimer", name="referent_contracts_delete")
     */
    public function delete()
    {
        return $this->render('pages/referent/contrats/delete.html.twig');
    }
}
