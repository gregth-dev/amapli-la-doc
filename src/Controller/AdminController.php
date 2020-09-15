<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/administrateur")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/role/ajout", name="admin_add")
     */
    public function add()
    {
        return $this->render('pages/admin/add.html.twig');
    }
    /**
     * @Route("/role/supprimer", name="admin_delete")
     */
    public function delete()
    {
        return $this->render('pages/admin/delete.html.twig');
    }
    /**
     * @Route("/gestion/acces", name="admin_access")
     */
    public function access()
    {
        return $this->render('pages/admin/access.html.twig');
    }
}
