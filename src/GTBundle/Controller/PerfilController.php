<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GTBundle\Entity\Perfil;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GuzzleHttp\Client;

class PerfilController extends Controller {
    
    
    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/perfil');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Perfil:list.html.twig', array('perfiles' => $data));
    }
    
    
    public function addAction() {
        $perfil = new Perfil();
        $form = $this->createFormBuilder($perfil)
                ->add('nombre', TextType::class)
                ->add('objetivo', TextType::class)
                ->add('reporta', TextType::class)
                ->add('tareas', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();
        return $this->render('GTBundle:Perfil:add.html.twig', array(
                    'form' => $form->createView()));
    }

    public function createAction(Request $request) {
        $perfil = new Perfil();
        $form = $this->createFormBuilder($perfil);
        $form->handleRequest($request);
        if ($form->isValid()) {
            
            $perfil = new Perfil();
            $perfil->setNombre($form->get("nombre")->getData());
            $perfil->setObjetivo($form->get("objetivo")->getData());
            $perfil->setReporta($form->get("objetivo")->getData());
            $perfil->setTareas($form->get("objetivo")->getData());
            $client = new Client();
            $r = $client->request('POST', 'http://138.197.7.205/gt/api/web/perfil/crear', ['body' => $perfil]);
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($r);
//            $em->flush();
//            $this->addFlash('mensaje', 'El Perfil fue creado con exito.');    
            return $this->redirectToRoute('list_perfil');
        }
        return $this->render('GTBundle:Perfil:add.html.twig', array('form' => $form->createView()));
    }

}
