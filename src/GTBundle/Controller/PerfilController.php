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
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/perfil');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Perfil:list.html.twig', array('perfiles' => $data));
    }

       

    public function createAction(Request $request) {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('POST', 'http://138.197.7.205/gt/api/web/perfil');
        $form = $this->createFormBuilder()
                ->add('nombre', TextType::class)
                ->add('objetivo', TextType::class)
                ->add('reporta', TextType::class)
                ->add('tareas', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();

        return $this->render('GTBundle:Perfil:add.html.twig', array(
                    'form' => $form->createView(),
        ));
    }
}
