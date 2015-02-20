<?php

namespace Dbronczyk\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DbronczykDemoBundle:Default:index.html.twig', array(
		//'name' => $name
		));
    }
}
