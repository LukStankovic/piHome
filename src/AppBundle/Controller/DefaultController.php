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
    	$teplotaBunddle = $this->getDoctrine()->getRepository('AppBundle:Teplota');

    	$currentTemperatureQuery = $teplotaBunddle->createQueryBuilder('t')
		    ->orderBy('t.id', 'DESC')
		    ->getQuery();

    	$currentTemperature = $currentTemperatureQuery->setMaxResults(1)->getOneOrNullResult();
	    $currentTemperatureAgo = $currentTemperature->timeAgo($currentTemperature->getDatum()->getTimestamp());

        return $this->render('default/index.html.twig', [
            'currentTemperature' => $currentTemperature,
            'currentTemperatureAgo' => $currentTemperatureAgo,
            'currentTemperatureBoxColor' => $currentTemperature->boxColor(),
        ]);
    }
}
