<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/produit/listing", name="referent_products_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/produits/listing.html.twig');
    }

    /**
     * @Route("/produit/ajouter", name="referent_products_add")
     */
    public function addProducer()
    {
        return $this->render('pages/referent/produits/add.html.twig');
    }

    /**
     * @Route("/produit/modifier", name="referent_products_edit")
     */
    public function editProducer()
    {
        return $this->render('pages/referent/produits/edit.html.twig');
    }

    /**
     * @Route("/produit/supprimer", name="referent_products_delete")
     */
    public function deleteProducer()
    {
        return $this->render('pages/referent/produits/delete.html.twig');
    }
}
