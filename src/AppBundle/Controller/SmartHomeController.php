<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SmartHomeController extends Controller
{
    /**
     * @Route("/led")
     */
    public function smartHomeAction()
    {
        return $this->render('AppBundle:SmartHome:smartHome.html.twig', array(
            // ...
        ));
    }

}
