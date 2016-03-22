<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Avanzu\AdminThemeBundle\Form\FormDemoModelType;
use Avanzu\AdminThemeBundle\Controller\DefaultController as AdminController ;
class DefaultController extends AdminController
{

    /**
     * @Route("/questions/liste", name="app_quest_listing")
     */
    public function listingAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AppBundle:Default:listing.html.twig');
    }
}
