<?php

namespace Application\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationHomeBundle:Index:index.html.twig', array('name' => $name));
    }
}
