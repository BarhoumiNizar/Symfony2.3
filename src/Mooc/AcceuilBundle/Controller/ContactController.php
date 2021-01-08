<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactController
 *
 * @author Boudi
 */
namespace Mooc\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ContactController extends Controller {
    public function contactAction()
    {
        return $this->render('MoocAcceuilBundle:Contact:Contact.html.twig');
    }
}
