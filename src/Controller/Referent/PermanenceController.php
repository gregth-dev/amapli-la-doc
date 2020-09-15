<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class PermanenceController extends AbstractController
{
    /**
     * @Route("/permanence/listing", name="referent_permanence_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/permanences/listing.html.twig');
    }

    /**
     * @Route("/permanence/ajouter", name="referent_permanence_add")
     */
    public function add()
    {
        return $this->render('pages/referent/permanences/add.html.twig');
    }

    /**
     * @Route("/permanence/ajouter", name="referent_permanence_add_multi")
     */
    public function addMulti()
    {
        return $this->render('pages/referent/permanences/add_multi.html.twig');
    }

    /**
     * @Route("/permanence/consulter", name="referent_permanence_read")
     */
    public function read()
    {
        return $this->render('pages/referent/permanences/read.html.twig');
    }

    /**
     * @Route("/permanence/modifier", name="referent_permanence_edit")
     */
    public function edit()
    {
        return $this->render('pages/referent/permanences/edit.html.twig');
    }

    /**
     * @Route("/permanence/supprimer", name="referent_permanence_delete")
     */
    public function delete()
    {
        return $this->render('pages/referent/permanences/delete.html.twig');
    }

    /**
     * @Route("/permanence/desinscrire", name="referent_permanence_unsubscribe")
     */
    public function unsubscribe()
    {
        return $this->render('pages/referent/permanences/unsubscribe.html.twig');
    }
}
