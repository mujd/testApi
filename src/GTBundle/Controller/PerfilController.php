<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use GTBundle\Entity\Perfil;
use GTBundle\Entity\PerfilUcl;
use GTBundle\Form\PerfilType;
use GTBundle\Form\PerfilUclType;
use GuzzleHttp\Client;
use Doctrine\Common\Collections\ArrayCollection;

class PerfilController extends Controller {

    public function listAction(Request $request) {
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/perfil');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Perfil:list.html.twig', array('perfiles' => $data));
    }

    public function addAction(Request $request) {
        $perfil = new Perfil();
        $originalCompetencias = new ArrayCollection();

        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($perfil->getUcl() as $competencia) {
            $originalCompetencias->add($competencia);
        }
        $form = $this->createForm(PerfilType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($originalCompetencias as $competencia) {
                if (false === $perfil->getUcl()->contains($competencia)) {
                    // remove the Task from the Tag
                    $competencia->getTasks()->removeElement($perfil);

                    // if it was a many-to-one relationship, remove the relationship like this
                    // $competencia->setTask(null);

                    $em->persist($competencia);

                    // if you wanted to delete the Tag entirely, you can also do that
                    // $em->remove($competencia);
                }
            }
            $client = new Client;
            $r = $client->post('http://138.197.7.205/gt/api/web/perfil', ['json' => [
                    "nombre" => $form->get("nombre")->getData(),
                    "objetivo" => $form->get("objetivo")->getData(),
                    "reporta" => $form->get("reporta")->getData(),
                    "tareas" => $form->get("tareas")->getData(),
                    "ucls" => $form->get("ucl")->getData(),
                    "competencias" => $form->get("conducta")->getData()
            ]]);
            $perfilId = 
            $parametro["id"] = $perfilId;

            return $this->redirectToRoute("perfil_update", $parametro);


//            $perfilId= $form->get("id")->getData();aqui necesitamos el ID
//            $parametro["id"]=$perfilId;
//            luego el array parametro se lo pasamos al ruta update
//            return $this->redirectToRoute("perfil_update", $parametro);
//            Fijate que despues de hacer el add redirecciomos a la ruta update con el paramtro que recibe, es decir el ID.
//            return $this->redirectToRoute("perfil_add");
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

    public function updateAction(Request $request, $id) {
        $perfilId = $id;
        $client = new Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/perfil/' . $perfilId);
        $perfil = json_decode($r->getBody()->getContents(), true);
        
//        echo '<pre>';
//        echo print_r($perfil);
//        echo '</pre>';

        $form = $this->createForm(PerfilType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $client = new Client;
            $r = $client->request('PUT', 'http://138.197.7.205/gt/api/web/perfil/' . $id, ['json' => [
                    "nombre" => $form->get("nombre")->getData(),
                    "objetivo" => $form->get("objetivo")->getData(),
                    "reporta" => $form->get("reporta")->getData(),
                    "tareas" => $form->get("tareas")->getData(),
                    "ucls" => $form->get("ucl")->getData(),
                    "competencias" => $form->get("conducta")->getData()
            ]]);

            $parametro["id"] = $id;
            return $this->redirectToRoute("perfil_update", $parametro);
        }

        return $this->render('GTBundle:Perfil:update.html.twig', array(
                    'form' => $form->createView()));
    }
    public function editAction(Request $request, $id) {
        
        $form = $this->createForm(PerfilUclType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
        }

        return $this->render("GTBundle:Perfil:edit.html.twig", array(
                    "form" => $form->createView()
        ));
    }

//    public function editAction(Request $request, $id) {
//        $em = $this->getDoctrine()->getManager();
//        $category_repo = $em->getRepository("BlogBundle:Category");
//        $category = $category_repo->find($id);
//
//
//
//        $form = $this->createForm(new CategoryType(), $category);
//        $form->handleRequest($request);
//        if ($form->isSubmitted()) {
//            if ($form->isValid()) {
//
//                $category->setName($form->get("name")->getData());
//                $category->setDescription($form->get("description")->getData());
//
//                $em = $this->getDoctrine()->getManager();
//                $em->persist($category);
//                $flush = $em->flush();
//                if ($flush == null) {
//                    $status = "La categoria se a Editado Correctamente";
//                } else {
//                    $status = "Error al Editar la categoria";
//                }
//            } else {
//                $status = "Formulario no valido, ingrese datos correctamente!";
//            }
//            $this->session->getFlashBag()->add("status", $status);
//            return $this->redirectToRoute("blog_index_category");
//        }
//
//        return $this->render("BlogBundle:Category:edit.html.twig", array(
//                    "form" => $form->createView()
//        ));
//    }

    public function deleteAction($id) {
        $client = new Client;
        $r = $client->delete('http://138.197.7.205/gt/api/web/perfil/' . $id);
        $this->addFlash('mensaje', 'El Perfil fue Eliminado con exito.');
        return $this->redirectToRoute('perfil_list');
    }

}
