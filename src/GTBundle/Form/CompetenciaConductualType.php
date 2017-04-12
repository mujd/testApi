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

class CompetenciaConductualType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $indicador = new Client();
        $indicadores = $indicador->request('GET', 'http://138.197.7.205/gt/api/web/indicador');
        $data = json_decode($indicadores->getBody()->getContents(), true);

        foreach ($data as $row) {
            $choices[$row['nombre']] = $row['id'];
        }
        $builder
                ->add('nombre', TextType::class)
                ->add('definicion', TextType::class)
//                ->add('indicador', ChoiceType::class, array(
//                    'choices' => $choices,
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
            'data_class' => 'GTBundle\Entity\CompetenciaConductual'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gtbundle_competenciaConductual';
    }

}
