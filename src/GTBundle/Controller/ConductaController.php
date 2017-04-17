<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GTBundle\Entity\Conducta;
use GTBundle\Form\ConductaType;
use GuzzleHttp\Client;

class ConductaController extends Controller {

    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/conducta');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Conducta:list.html.twig', array('conductas' => $data));
    }

    public function addAction(Request $request) {
        $conducta = new Conducta();
        $form = $this->createForm(ConductaType::class, $conducta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/conducta', ['json' => [
                    "nombre" => $form->get("nombre")->getData(),
                    "definicion" => $form->get("definicion")->getData(),
                    "indicadores" => [$form->get("indicador")->getData()]
            ]]);


            return $this->redirectToRoute("conducta_add");
        }

        return $this->render('GTBundle:Conducta:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function updateAction($id){
        
    }

    public function deleteAction($id) {
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/conducta/' . $id);
        $this->addFlash('mensaje', 'La competencia conductual fue Eliminada con exito.');
        return $this->redirectToRoute('conducta_list');
    }

}
