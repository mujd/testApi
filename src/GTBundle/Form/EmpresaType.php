<?php

namespace GTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GuzzleHttp\Client;

class EmpresaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('rut', TextType::class)
                ->add('giro', TextType::class)
                ->add('razonSocial', TextType::class)
                ->add('direccion', TextType::class)
                ->add('comuna', TextType::class)
                ->add('telefono', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GTBundle\Entity\Empresa'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gtbundle_empresa';
    }

}
