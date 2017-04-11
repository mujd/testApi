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

class PersonaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $perfil = new Client();
        $perfiles = $perfil->request('GET', 'http://138.197.7.205/gt/api/web/perfil');
        $data = json_decode($perfiles->getBody()->getContents(), true);

        foreach ($data as $row) {
            $choices[$row['nombre']] = $row['id'];
        }
        $builder
                ->add('rut', TextType::class)
                ->add('nombre', TextType::class)
                ->add('apellidoPaterno', TextType::class)
                ->add('apellidoMaterno', TextType::class)
                ->add('correo', TextType::class)
                ->add('perfilId', ChoiceType::class, array(
                    'choices' => $choices,
                    'required' => false,
                    'placeholder' => ':: SELECCIONE ::',
                    'empty_data' => null
                ))
                
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GTBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gtbundle_persona';
    }

}
