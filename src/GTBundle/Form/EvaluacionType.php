<?php

namespace GTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use GuzzleHttp\Client;

class EvaluacionType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $persona = new Client();
        $personas = $persona->request('GET', 'http://138.197.7.205/gt/api/web/persona');
        $dataPersona = json_decode($personas->getBody()->getContents(), true);

        foreach ($dataPersona as $row) {
            $choicesPersona[$row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']] = $row['id'];
        }
        $builder
                ->add('codigo', TextType::class)
                ->add('nombre', TextType::class)
                ->add('fechaInicio', DateType::class, array(
                    // render as a single text box
                    'widget' => 'single_text',
                ))
                ->add('fechaTermino', DateType::class, array(
                    // render as a single text box
                    'widget' => 'single_text',
                ))
                ->add('observacion', TextareaType::class)
                ->add('persona', ChoiceType::class, array(
                    'choices' => $choicesPersona,
                    'multiple' => true,
                    'expanded' => true,
                ))
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GTBundle\Entity\Evaluacion'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gtbundle_evaluacion';
    }

}
