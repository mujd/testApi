<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use GTBundle\Form\PersonaType;
use GTBundle\Entity\Persona;
use GTBundle\Controller\PerfilController;
use GuzzleHttp\Client;

class PersonaController extends Controller {

    public function listAction(Request $request) {
        $client = new \GuzzleHttp\Client();
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

    public function deleteAction($id) {
        
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/persona/{id}' + [$id]);
        $this->addFlash('mensaje', 'La Persona fue Eliminado con exito.');
        return $this->redirectToRoute('list_persona');
    }

}
