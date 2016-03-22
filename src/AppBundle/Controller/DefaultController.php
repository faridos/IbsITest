<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Avanzu\AdminThemeBundle\Controller\DefaultController as AdminController ;
class DefaultController extends AdminController
{



    /**
     * @Route("/demo-admin/login/", name="avanzu_admin_login_demo")
     */
    public function loginAction() {
        return $this->render('UserBundle:Security:login.html.twig');
    }
}
