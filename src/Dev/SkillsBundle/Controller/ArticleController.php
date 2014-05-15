<?php

namespace Dev\SkillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
  public function indexAction()
    {
        return $this->render('DevSkillsBundle:Article:index.html.twig', array('Dev' => 'Dev-Skills'));
        //appel du template Twig depuis le contrôleur
    }
}
