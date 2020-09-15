<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class ProducerController extends AbstractController
{
    /**
     * @Route("/producteur/listing", name="referent_producers_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/producteur/listing.html.twig');
    }

    /**
     * @Route("/producteur/ajouter", name="referent_producers_add")
     */
    public function addProducer()
    {
        return $this->render('pages/referent/producteur/add.html.twig');
    }

    /**
     * @Route("/producteur/consulter", name="referent_producers_read")
     */
    public function readProducer()
    {
        return $this->render('pages/referent/producteur/read.html.twig');
    }

    /**
     * @Route("/producteur/modifier", name="referent_producers_edit")
     */
    public function editProducer()
    {
        return $this->render('pages/referent/producteur/edit.html.twig');
    }

    /**
     * @Route("/producteur/supprimer", name="referent_producers_delete")
     */
    public function deleteProducer()
    {
        return $this->render('pages/referent/producteur/delete.html.twig');
    }

    /**
     * @Route("/producteur/editerdeslivraisons", name="referent_producers_edit_deliveries")
     */
    public function editDeliveries()
    {
        return $this->render('pages/referent/producteur/deliveries.html.twig');
    }
}
