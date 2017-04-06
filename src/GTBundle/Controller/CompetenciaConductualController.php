<?php

namespace GTBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CompetenciaConductualController extends Controller
{
    public function listAction(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $r = $client->request('GET', 'http://138.197.7.205/gt/api/web/competenciaConductual');
        $data = json_decode($r->getBody()->getContents(), true);
        return $this->render('GTBundle:CompetenciaConductual:list.html.twig', array('competencias' => $data));
    }

    
}