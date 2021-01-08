<?php
namespace Mooc\AcceuilBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationTypeEntreprise extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                 ->add('image','file')
                ->add('email')
                ->add('document','file')
                ->add('domaine','choice',array('label'=>'domaine','choices'=>array
                        ('Medecine'=>'Medecine',
                         'Informatique'=>'Informatique',
                         'Finance'=>'Finance'),
                          'multiple'=>false))
                ->add('telephone')
                ->add('adresse');
                
                
    }

    public function getParent()
    {
        //return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
         return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'register_Entreprise';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

