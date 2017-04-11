<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CompetenciaConductualController extends Controller
{
    public function listAction(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/competenciaConductual');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:CompetenciaConductual:list.html.twig', array('competencias' => $data));
    }

    public function addAction() {
        
        $form = $this->createFormBuilder()
                ->add('nombre', TextType::class)
                ->add('definicion', TextareaType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();
        return $this->render('GTBundle:CompetenciaConductual:add.html.twig', array(
                    'form' => $form->createView()));
    }
}