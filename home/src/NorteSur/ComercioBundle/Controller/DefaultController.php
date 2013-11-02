<?php

namespace NorteSur\ComercioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NorteSurComercioBundle:Default:index.html.twig', array('name' => $name));
    }
}
