<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use GTBundle\Entity\Empresa;
use GTBundle\Form\EmpresaType;
use GuzzleHttp\Client;

class EmpresaController extends Controller {

    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/empresa');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Empresa:list.html.twig', array('empresas' => $data));
    }

    public function addAction(Request $request) {

        $empresa = new Empresa();
        $form = $this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/empresa', ['json' => [
                    //"access_token" => "thats a secret!",
                    "rut" => $form->get("rut")->getData(),
                    "giro" => $form->get("giro")->getData(),
                    "razonSocial" => $form->get("razonSocial")->getData(),
                    "direccion" => $form->get("direccion")->getData(),
                    "comuna" => $form->get("comuna")->getData(),
                    "telefono" => $form->get("telefono")->getData()
            ]]);

            return $this->redirectToRoute("empresa_add");
        }
        return $this->render('GTBundle:Empresa:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
    public function updateAction($id){
        
    }
    
    public function deleteAction($id) {        
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/empresa/'.$id);
        $this->addFlash('mensaje', 'La Empresa fue Eliminada con exito.');
        return $this->redirectToRoute('empresa_list');
    }
}
