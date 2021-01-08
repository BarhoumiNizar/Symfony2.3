<?php

namespace Mooc\AdminBackOffieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
   public function indexAction() {
        return $this->render('MoocAdminBackOffieBundle:moocAdmin:indexAdmin.html.twig', array('user' => $this->getUser()));
    }

    public function viewutilisateursqueletteAction() {

        return $this->render('MoocAdminBackOffieBundle:moocAdmin:userViewAdminsqulette.html.twig', array());
    }

    public function viewutilisateurTableauAction($filter = null) {
        if ($filter == 'null')
            $userss = $this->getDoctrine()->getRepository('MoocAcceuilBundle:Personne')->findAll();
        else {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                            'SELECT distinct u
            FROM MoocAcceuilBundle:Personne u WHERE
            u.nom LIKE :filter or
            u.prenom LIKE :filter or
            u.domaine LIKE :filter or
            u.niveau LIKE :filter or
            u.email LIKE :filter or
            u.telephone LIKE :filter or
            u.roles LIKE :filter or
            u.id LIKE :filter or
            u.datenaissance LIKE :filter or
            u.username LIKE :filter
            
                    '
                    )->setParameter('filter', '%' . $filter . '%');

            $userss = $query->getResult();
        }
        $APPRENANT[] = null;
        $FORMATEUR[] = null;
        $ENTREPRISE[] = null;
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        foreach ($userss as $i => $value) {
            $user = $value;
            if ($user->hasRole('ROLE_APPRENANT')) {
                array_push($APPRENANT, $user);
            } else
            if ($user->hasRole('ROLE_FORMATEUR')) {
                array_push($FORMATEUR, $user);
            } else
                if ($user->hasRole('ROLE_ENTREPRISE')) {
                array_push($ENTREPRISE, $user);
            }                                                                                                      
        }
        return $this->render('MoocAdminBackOffieBundle:moocAdmin:userViewTableau.html.twig', array("APPRENANT" => $APPRENANT, "FORMATEUR" => $FORMATEUR, "ENTREPRISE" => $ENTREPRISE));
    }

    public function removeUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoocAcceuilBundle:Personne')->findOneById($id);
          
        $em->remove($user);
        $em->flush();
        return $this->viewutilisateursqueletteAction();
    }

    public function enableUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoocAcceuilBundle:Personne')->findOneById($id);
        $user->setEnabled(true);
        $em->persist($user);
        $em->flush();
        return $this->viewutilisateursqueletteAction();
    }

    public function disableUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MoocAcceuilBundle:Personne')->findOneById($id);
        $user->setEnabled(false);
        $em->persist($user);
        $em->flush();
        return $this->viewutilisateursqueletteAction();
    }












    
}
