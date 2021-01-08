<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutController
 *
 * @author User
 */
namespace Mooc\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller {
   
    public function aboutAction()
    {
        return $this->render('MoocAcceuilBundle:About:About.html.twig');
    }
    
}
