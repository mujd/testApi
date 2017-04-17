<?php

namespace GTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use GTBundle\Entity\PerfilUcl;
use GTBundle\Form\PerfilUclType;
use GuzzleHttp\Client;

class PerfilType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $ucl = new Client();
//        $ucls = $ucl->request('GET', 'http://138.197.7.205/gt/api/web/ucl');
//        $dataUcl = json_decode($ucls->getBody()->getContents(), true);
//
//        foreach ($dataUcl as $row) {
//            $choicesUcl[$row['nombre']] = $row['id'];
//        }
//        $conducta = new Client();
//        $conductas = $conducta->request('GET', 'http://138.197.7.205/gt/api/web/conducta');
//        $dataComp = json_decode($conductas->getBody()->getContents(), true);
//
//        foreach ($dataComp as $row) {
//            $choicesCompetencia[$row['nombre']] = $row['id'];
//        }
        $builder
                ->add('id', HiddenType::class)
                ->add('nombre', TextType::class)
                ->add('objetivo', TextType::class)
                ->add('reporta', TextType::class)
                ->add('tareas', TextType::class)
//                ->add('ucl', CollectionType::class, array(
//                    'entry_type' => PerfilUclType::class,
//                    'label' => 'UCL',
//                    'allow_add' => true,
//                    'by_reference' => false,
//                    'allow_delete' => true,
//                ))
                ->add('ucl', PerfilUclType::class)
//                ->add('ucl', ChoiceType::class, array(
//                    'choices' => $choicesUcl,
//                    'multiple' => true,
//                    'expanded' => true,
//                ))
//                ->add('conducta', ChoiceType::class, array(
//                    'choices' => $choicesCompetencia,
//                    'multiple' => true,
//                    'expanded' => true,
//                ))
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GTBundle\Entity\Perfil'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gtbundle_perfil';
    }

}
