<?php

namespace Mooc\AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcceuilController extends Controller
{
    
    public function homeAction()
    {
       $test=$this->getUser();
//echo 'bbbbbb bxbxbxbxb '.$test;   
if($test==null)
//echo "<script>alert('okooko')</script>";   
{return $this->render('MoocAcceuilBundle:Acceuil:Home.html.twig');}
else 
	//echo "<script>alert('nono')</script>"; 
	{
	   $user='tunisiawebdev';
	   $_SESSION['user']=$user;
	   return $this->render('MoocAcceuilBundle:Acceuil:Home.html.twig',array('user'=>$_SESSION['user']));
	   
	   }
    }
    
    
}

