<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Page3
 *
 * @author Boudi
 */
namespace Mooc\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassesController extends Controller {
   
    public function classesAction()
    {
        return $this->render('MoocAcceuilBundle:Classes:Classes.html.twig');
    }
    
}

