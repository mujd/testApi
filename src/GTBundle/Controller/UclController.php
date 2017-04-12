<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GuzzleHttp\Client;

class UclController extends Controller
{
    public function listAction(Request $request)
    {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/ucl');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Ucl:list.html.twig', array('ucls' => $data));
    }

    public function addAction() {
        
        $form = $this->createFormBuilder()
                ->add('nombre', TextType::class)
                ->add('definicion', TextareaType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();
        return $this->render('GTBundle:Ucl:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function updateAction($id){
        
    }
    
    public function deleteAction($id) {        
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/ucl/'.$id);
        $this->addFlash('mensaje', 'La Ucl fue Eliminada con exito.');
        return $this->redirectToRoute('ucl_list');
    }
}