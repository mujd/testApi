<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GTBundle\Entity\CompetenciaConductual;
use GTBundle\Form\CompetenciaConductualType;
use GuzzleHttp\Client;

class CompetenciaConductualController extends Controller {

    public function listAction(Request $request) {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/competenciaConductual');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:CompetenciaConductual:list.html.twig', array('competencias' => $data));
    }

    public function addAction(Request $request) {
        $competenciaConductual = new CompetenciaConductual();
        $form = $this->createForm(CompetenciaConductualType::class, $competenciaConductual);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/competenciaConductual', ['json' => [
                    "nombre" => $form->get("nombre")->getData(),
                    "definicion" => $form->get("definicion")->getData(),
                    "indicadores" => [$form->get("indicador")->getData()]
            ]]);


            return $this->redirectToRoute("competenciaConductual_add");
        }

        return $this->render('GTBundle:CompetenciaConductual:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function updateAction($id){
        
    }

    public function deleteAction($id) {
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/competenciaConductual/' . $id);
        $this->addFlash('mensaje', 'La competencia conductual fue Eliminada con exito.');
        return $this->redirectToRoute('competenciaConductual_list');
    }

}
