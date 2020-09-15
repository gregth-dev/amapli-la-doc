<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class DocumentController extends AbstractController
{
    /**
     * @Route("/document/listing", name="referent_document_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/documents/listing.html.twig');
    }

    /**
     * @Route("/document/ajouter", name="referent_document_add")
     */
    public function add()
    {
        return $this->render('pages/referent/documents/add.html.twig');
    }

    /**
     * @Route("/document/consulter", name="referent_document_read")
     */
    public function read()
    {
        return $this->render('pages/referent/documents/read.html.twig');
    }

    /**
     * @Route("/document/modifier", name="referent_document_edit")
     */
    public function edit()
    {
        return $this->render('pages/referent/documents/edit.html.twig');
    }

    /**
     * @Route("/document/supprimer", name="referent_document_delete")
     */
    public function delete()
    {
        return $this->render('pages/referent/documents/delete.html.twig');
    }
}
