<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GTBundle\Entity\Evaluacion;
use GTBundle\Form\EvaluacionType;
use GuzzleHttp\Client;

class EvaluacionController extends Controller {

    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/evaluacion');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Evaluacion:list.html.twig', array('evaluaciones' => $data));
    }

    public function addAction(Request $request) {
        $evaluacion = new Evaluacion();
        $form = $this->createForm(EvaluacionType::class, $evaluacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/evaluacion', ['json' => [
                    "codigo" => $form->get("codigo")->getData(),
                    "nombre" => $form->get("nombre")->getData(),
                    "fechaInicio" => $form->get("fechaInicio")->getData(),
                    "fechaTermino" => $form->get("fechaTermino")->getData(),
                    "observacion" => $form->get("observacion")->getData(),
                    "personas" => $form->get("persona")->getData()
            ]]);
            echo '<pre>';
        echo print_r($r);
        echo '</pre>';
            return $this->redirectToRoute("evaluacion_add");
        }
        return $this->render('GTBundle:Evaluacion:add.html.twig', array(
                    'form' => $form->createView()));
    }

    public function updateAction($id) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/evaluacion/persona/'.$id);
        $evaluacion = json_decode($r->getBody()->getContents(), true);
        
//        echo '<pre>';
//        echo print_r($evaluacion);
//        echo '</pre>';
        
        $form = $this->createForm(EvaluacionType::class, $evaluacion);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $client = new Client;
            $r = $client->request('PUT', 'http://138.197.7.205/gt/api/web/evaluacion/'.$id, ['json' => [
                    "codigo" => $form->get("codigo")->getData(),
                    "nombre" => $form->get("nombre")->getData(),
                    "fechaInicio" => $form->get("fechaInicio")->getData(),
                    "fechaTermino" => $form->get("fechaTermino")->getData(),
                    "observacion" => $form->get("observacion")->getData(),
                    "personas" => $form->get("persona")->getData()
            ]]);

            return $this->redirectToRoute("evaluacion_update");
        }

        return $this->render('GTBundle:Evaluacion:update.html.twig', array(
                    'form' => $form->createView()));
    }

    public function deleteAction($id) {
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/evaluacion/' . $id);
        $this->addFlash('mensaje', 'La evaluación fue Eliminada con exito.');
        return $this->redirectToRoute('evaluacion_list');
    }

}
