<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PersonaController extends Controller
{
    public function listAction(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/persona');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:Persona:list.html.twig', array('personas' => $data));
    }

    
}