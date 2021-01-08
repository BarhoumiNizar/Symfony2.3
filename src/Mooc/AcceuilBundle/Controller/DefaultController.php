<?php

namespace Mooc\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MoocAcceuilBundle:Default:index.html.twig', array('name' => $name));
    }
   
}
