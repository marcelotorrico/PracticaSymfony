<?php

namespace MTD\PracticaSymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MTDPracticaSymfonyBundle:Default:index.html.twig', array('name' => $name));
    }
}
