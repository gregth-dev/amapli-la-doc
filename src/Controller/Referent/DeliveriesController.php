<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class DeliveriesController extends AbstractController
{
    /**
     * @Route("/livraison/listing/adherent", name="referent_deliveries_listing_member")
     */
    public function listingMember()
    {
        return $this->render('pages/referent/livraisons/listing_member.html.twig');
    }

    /**
     * @Route("/livraison/listing/producteur", name="referent_deliveries_listing_producer")
     */
    public function listingProducer()
    {
        return $this->render('pages/referent/livraisons/listing_producer.html.twig');
    }

    /**
     * @Route("/livraison/editer", name="referent_deliveries_edit")
     */
    public function editProducer()
    {
        return $this->render('pages/referent/livraisons/edit.html.twig');
    }
}
