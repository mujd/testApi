<?php

namespace GTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GTBundle\Form\PerfilType;
use GTBundle\Entity\PerfilUcl;
use GuzzleHttp\Client;

class PerfilUclType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $ucl = new Client();
        $ucls = $ucl->request('GET', 'http://138.197.7.205/gt/api/web/ucl');
        $dataUcl = json_decode($ucls->getBody()->getContents(), true);

        foreach ($dataUcl as $row) {
            $choicesUcl[$row['nombre']] = $row['id'];
        }
        $builder
                ->add('nombre', ChoiceType::class, array(
                    'choices' => $choicesUcl,
                    'multiple' => true,
                    'expanded' => true,
                    'required' => false,
                    'attr' => array(
                        'style' => "padding:0",
                        'class' => 'form-control input-sm',
                        'aria-describedby' => 'sizing-addon3'
                    ),
        ));
        $builder
                ->add('nivel', ChoiceType::class, array(
                    'choices' => array(
                        '' => '',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                    ),
                    'required' => false,
                    'attr' => array(
                        'style' => "padding:0",
                        'class' => "form-control input-sm",
                    ),
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GTBundle\Entity\PerfilUcl'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gtbundle_perfilUcl';
    }

}
