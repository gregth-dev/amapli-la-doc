<?php

namespace App\Controller\Tresorier;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tresorier")
 */
class SubscriptionController extends AbstractController
{
    /**
     * @Route("/adhesion/listing", name="treasurer_subscription_listing")
     */
    public function listing()
    {
        return $this->render('pages/tresorier/adhesion/listing.html.twig');
    }

    /**
     * @Route("/adhesion/consulter", name="treasurer_subscription_unsubscribe")
     */
    public function unsubscribe()
    {
        return $this->render('pages/tresorier/adhesion/unsubscribe.html.twig');
    }

    /**
     * @Route("/adhesion/ajouter", name="treasurer_subscription_add")
     */
    public function add()
    {
        return $this->render('pages/tresorier/adhesion/add.html.twig');
    }

    /**
     * @Route("/adhesion/paiements", name="treasurer_subscription_payments")
     */
    public function payments()
    {
        return $this->render('pages/tresorier/adhesion/payments.html.twig');
    }

    /**
     * @Route("/adhesion/modifier", name="treasurer_subscription_edit")
     */
    public function edit()
    {
        return $this->render('pages/tresorier/adhesion/edit.html.twig');
    }

    /**
     * @Route("/adhesion/supprimer", name="treasurer_subscription_delete")
     */
    public function delete()
    {
        return $this->render('pages/tresorier/adhesion/delete.html.twig');
    }
}
