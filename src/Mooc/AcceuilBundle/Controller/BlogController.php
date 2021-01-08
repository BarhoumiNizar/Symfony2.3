<?php

namespace Mooc\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mooc\AcceuilBundle\Entity\Personne;
use Mooc\AcceuilBundle\Entity\Invitationformateur;
class BlogController extends Controller {
public function blogAction()
    {
       $em = $this->getDoctrine()->getManager();
        $personnes = $em->getRepository("MoocAcceuilBundle:Personne")->findAll();
		// je recupère une entité maintenant qui existe
    $compteur = 0;
    foreach($personnes as $pers){
        $compteur += 1;
		//echo $compteur.'<br>';
    }
	
        return $this->render("MoocAcceuilBundle:Blog:blog.html.twig",array("personnes" => $personnes));
    }
    
    public function AfficherProfilAction($id) {
        $pers=new Personne();
       
      //$type=$pers->getAdresse();
        $em = $this->getDoctrine()->getManager();
        $personnes_detail = $em->getRepository("MoocAcceuilBundle:Personne")->find($id);
        
        return $this->render("MoocAcceuilBundle:Blog:profil.html.twig",array("detail" => $personnes_detail));
    }
    public function invitationFormateurAction()
	{
		
		$em = $this->getDoctrine()->getManager();
		$request=$this->get('request');
		$id_formateur=$request->get('formateur');
		$id_connect=$request->get('user');
		$form=new Invitationformateur();
		$form->setIdFormateurconnecte($id_formateur);
		$form->setidEntreprise($id_connect);
		$form->setValider('0');
		$em->persist($form);
		$em->flush();
		//$test=app.user.username;
	     echo 'kookoo';
		 
	}
	public function notificationAction()
	{
		$pers=new Personne();
		$em = $this->getDoctrine()->getManager();
	
		
		$id_connect = $this->getUser()->getId();
     $notification=$em->getRepository('MoocAcceuilBundle:Invitationformateur')->
		               findBy(array('idFormateurconnecte'=>$id_connect,
					                 'valider'=>'0'));
		 $row =count($notification);
		 echo 'vous avez '.$row.' notification<br>';
		//echo $id_connect;
		
		return $this->render("MoocAcceuilBundle:Blog:notification.html.twig",array("notification" => $notification));
	}
	public function modifierEtatAction()
	{
		$id_connect = $this->getUser()->getId();
		$em = $this->getDoctrine()->getManager();
		$etat=$em->getRepository('MoocAcceuilBundle:Invitationformateur')->
		               findBy(array('idInvitationformateur'=>'1'));
		$form=new Invitationformateur();
		//$form->setIdFormateurconnecte($id_connect);
		$etat=$form->setValider('1');
		$em->persist($etat);
		$em->flush();
		echo 'oui ouio';
	}
    
}
