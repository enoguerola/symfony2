<?php

namespace Project\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
       return $this->render('ProjectMainBundle:Home:index.html.twig', array('name' => 'aaa'));
    }
}
