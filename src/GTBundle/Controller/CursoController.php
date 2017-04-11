<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CursoController extends Controller
{
    public function listAction(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/curso');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Curso:list.html.twig', array('cursos' => $data));
    }

    public function addAction() {
        
        $form = $this->createFormBuilder()
                ->add('codigo', TextType::class)
                ->add('nombre', TextType::class)
                ->add('objetivo', TextType::class)
                ->add('horas', TextType::class)
                ->add('cantidadParticipantes', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();
        return $this->render('GTBundle:Curso:add.html.twig', array(
                    'form' => $form->createView()));
    }

    
}