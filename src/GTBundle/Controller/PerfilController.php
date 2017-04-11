<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GTBundle\Entity\Perfil;
use GTBundle\Form\PerfilType;
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

    public function addAction(Request $request) {
        $perfil = new Perfil();
        $form = $this->createForm(PerfilType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/perfil', ['json' => [
                   "nombre" => $form->get("nombre")->getData(),
                    "objetivo" => $form->get("objetivo")->getData(),
                    "reporta" => $form->get("reporta")->getData(),
                    "tareas" => $form->get("tareas")->getData()   
            ]]);

            return $this->redirectToRoute("perfil_add");
        }

        return $this->render('GTBundle:Perfil:add.html.twig', array(
                    'form' => $form->createView()));
    }

    public function addqwAction(Request $request) {
        $perfil = new Category();
        $form = $this->createForm(new CategoryType(), $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $perfil = new Category();
                $perfil->setName($form->get("name")->getData());
                $perfil->setDescription($form->get("description")->getData());

                $em = $this->getDoctrine()->getManager();
                $em->persist($perfil);
                $flush = $em->flush();
                if ($flush == null) {
                    $status = "La categoria se a creado Correctamente";
                } else {
                    $status = "Error al añadir la categoria";
                }
            } else {
                $status = "Formulario no valido, ingrese datos correctamente!";
            }
            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute("blog_index_category");
        }
        return $this->render("BlogBundle:Category:add.html.twig", array(
                    "form" => $form->createView()
        ));
    }

    

}
