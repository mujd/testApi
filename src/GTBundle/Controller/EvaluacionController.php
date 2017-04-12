<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use GuzzleHttp\Client;

class EvaluacionController extends Controller {

    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/evaluacion');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Evaluacion:list.html.twig', array('evaluaciones' => $data));
    }

    public function addAction() {

        $form = $this->createFormBuilder()
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
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();
        return $this->render('GTBundle:Evaluacion:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function updateAction($id){
        
    }
    
    public function deleteAction($id) {        
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/evaluacion/'.$id);
        $this->addFlash('mensaje', 'La evaluación fue Eliminada con exito.');
        return $this->redirectToRoute('evaluacion_list');
    }
}
