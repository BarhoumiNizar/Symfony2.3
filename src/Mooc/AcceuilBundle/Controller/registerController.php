<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registerControllser
 *
 * @author Boudi
 */
namespace Mooc\AcceuilBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Mooc\AcceuilBundle\Form;
use Mooc\AcceuilBundle\Entity\Personne;
class registerController extends Controller {
        public function ApprenantAction()
               
    {//$this->formFactory->create(new ContactType(), $Contact)
             $user=new Personne();
            $formFactory = $this->get('MoocAcceuil.form.registration.Apprenant');
            $form = $this->createForm($formFactory,$user);
            $request = $this->get('request_stack')->getCurrentRequest();
            $form->handleRequest($request);
            if ($form->isValid()) {
                $user->setType("Apprenant");
                $user->setStatut("non validé");
                $user->setRoles(array('ROLE_APPRENANT'));
                //$user->setEnabled(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('mooc_acceuil_testpage'));
        }
           return $this->render('FOSUserBundle:Registration:registerapp.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    
           public function FormateurAction()
               
    {//$this->formFactory->create(new ContactType(), $Contact)
             $user=new Personne();
            $formFactory = $this->get('MoocAcceuil.form.registration.Formateur');
            $form = $this->createForm($formFactory,$user);
            $request = $this->get('request_stack')->getCurrentRequest();
            $form->handleRequest($request);
            if ($form->isValid()) {
                $user->setType("Formateur");
                $user->setStatut("non validé");
                $user->setRoles(array('ROLE_FORMATEUR'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('mooc_acceuil_testpage'));
        }
           return $this->render('FOSUserBundle:Registration:registerFormateur.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
       public function EntrepriseAction()
               
    {//$this->formFactory->create(new ContactType(), $Contact)
             $user=new Personne();
            $formFactory = $this->get('MoocAcceuil.form.registration.Entreprise');
            $form = $this->createForm($formFactory,$user);
            $request = $this->get('request_stack')->getCurrentRequest();
            $form->handleRequest($request);
            if ($form->isValid()) {
                $user->setType("Entreprise");
                $user->setStatut("non validé");
                $user->setRoles(array('ROLE_ENTREPRISE'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('mooc_acceuil_testpage'));
        }
           return $this->render('FOSUserBundle:Registration:registerEntreprise.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}



