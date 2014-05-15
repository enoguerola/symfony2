<?php

namespace Application\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
