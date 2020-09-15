<?php

namespace App\Controller\Tresorier;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tresorier")
 */
class OrganismController extends AbstractController
{
    /**
     * @Route("/association/listing", name="treasurer_organism_listing")
     */
    public function listing()
    {
        return $this->render('pages/tresorier/association/listing.html.twig');
    }

    /**
     * @Route("/association/ajouter", name="treasurer_organism_add")
     */
    public function add()
    {
        return $this->render('pages/tresorier/association/add.html.twig');
    }

    /**
     * @Route("/association/modifier", name="treasurer_organism_edit")
     */
    public function edit()
    {
        return $this->render('pages/tresorier/association/edit.html.twig');
    }

    /**
     * @Route("/association/supprimer", name="treasurer_organism_delete")
     */
    public function delete()
    {
        return $this->render('pages/tresorier/association/delete.html.twig');
    }
}
