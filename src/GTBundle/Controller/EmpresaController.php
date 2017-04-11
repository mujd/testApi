<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EmpresaController extends Controller
{
    public function listAction(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/empresa');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Empresa:list.html.twig', array('empresas' => $data));
    }

    public function addAction() {
        
        $form = $this->createFormBuilder()
                ->add('rut', TextType::class)
                ->add('giro', TextType::class)
                ->add('razonSocial', TextType::class)
                ->add('direccion', TextType::class)
                ->add('comuna', TextType::class)
                ->add('telefono', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Registrar'))
                ->getForm();
        return $this->render('GTBundle:Empresa:add.html.twig', array(
                    'form' => $form->createView()));
    }
    
}