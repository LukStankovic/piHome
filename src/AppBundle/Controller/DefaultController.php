<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Teplota;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

    	/* @var $temps Teplota */
    	$temps = $this->getDoctrine()->getRepository('AppBundle:Teplota')->findAll();

    	var_dump($temps);
        return $this->render('default/index.html.twig', [
            'temps' => $temps,

        ]);
    }
}
