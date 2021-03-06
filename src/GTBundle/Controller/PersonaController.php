<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GTBundle\Form\PersonaType;
use GTBundle\Entity\Persona;
use GTBundle\Controller\PersonaController;
use GuzzleHttp\Client;

class PersonaController extends Controller {

    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/persona');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Persona:list.html.twig', array('personas' => $data));
    }

    public function addAction(Request $request) {

        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/persona', ['json' => [
                    //"access_token" => "thats a secret!",
                    "rut" => $form->get("rut")->getData(),
                    "nombre" => $form->get("nombre")->getData(),
                    "apellidoPaterno" => $form->get("apellidoPaterno")->getData(),
                    "apellidoMaterno" => $form->get("apellidoMaterno")->getData(),
                    "correo" => $form->get("correo")->getData(),
                    "perfilId" => $form->get("perfilId")->getData()
            ]]);

            return $this->redirectToRoute("persona_add");
        }
        return $this->render('GTBundle:Persona:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function updateAction(Request $request,$id){
        $personaId = $id;
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/persona/'.$personaId);
        $persona = json_decode($r->getBody()->getContents(), true);
        
//        echo '<pre>';
//        echo print_r($perfil);
//        echo '</pre>';
        
        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $client = new Client;
            $r = $client->request('PUT', 'http://138.197.7.205/gt/api/web/persona/'.$id, ['json' => [
                    "rut" => $form->get("rut")->getData(),
                    "nombre" => $form->get("nombre")->getData(),
                    "apellidoPaterno" => $form->get("apellidoPaterno")->getData(),
                    "apellidoMaterno" => $form->get("apellidoMaterno")->getData(),
                    "correo" => $form->get("correo")->getData(),
                    "perfilId" => $form->get("perfilId")->getData()
            ]]);

            return $this->redirectToRoute("persona_update");
        }

        return $this->render('GTBundle:Persona:update.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function deleteAction($id) {        
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/persona/'.$id);
        $this->addFlash('mensaje', 'La Persona fue Eliminado con exito.');
        return $this->redirectToRoute('persona_list');
    }

}
