<?php
namespace Mooc\AcceuilBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationTypeFormateur extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom') 
                ->add('image','file')
                ->add('cv','file')
                ->add('datenaissance','date')
                ->add('telephone')
                ->add('specialite')
                ->add('experience');
                
    }

    public function getParent()
    {
        //return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
         return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'Register_Formateur';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

