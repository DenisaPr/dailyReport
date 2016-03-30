<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nume')
            ->add('prenume')
            ->add('nrOrdRegComAn')
            ->add('cif')
            ->add('sediu')
            ->add('judetul')
            ->add('contul')
            ->add('banca')
            ->add('seria')
            ->add('nrBi')
            ->add('eliberat')
            ->add('telefon')
            ->add('email')
            ->add('numeFirma')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Company'
        ));
    }
}
