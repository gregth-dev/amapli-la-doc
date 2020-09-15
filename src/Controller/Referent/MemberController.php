<?php

namespace App\Controller\Referent;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/referent")
 */
class MemberController extends AbstractController
{
    /**
     * @Route("/", name="referent_dashboard")
     */
    public function dashboard()
    {
        return $this->render('pages/referent/dashboard.html.twig');
    }

    /**
     * @Route("/adherents/listing", name="referent_members_listing")
     */
    public function listing()
    {
        return $this->render('pages/referent/adherents/listing.html.twig');
    }

    /**
     * @Route("/adherents/ajouter", name="referent_members_add")
     */
    public function addMember()
    {
        return $this->render('pages/referent/adherents/add.html.twig');
    }

    /**
     * @Route("/adherents/consulter", name="referent_members_read")
     */
    public function readMember()
    {
        return $this->render('pages/referent/adherents/read.html.twig');
    }

    /**
     * @Route("/adherents/modifier", name="referent_members_edit")
     */
    public function editMember()
    {
        return $this->render('pages/referent/adherents/edit.html.twig');
    }

    /**
     * @Route("/adherents/supprimer", name="referent_members_delete")
     */
    public function deleteMember()
    {
        return $this->render('pages/referent/adherents/delete.html.twig');
    }
}
