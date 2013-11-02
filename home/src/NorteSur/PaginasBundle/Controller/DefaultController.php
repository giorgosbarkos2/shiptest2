<?php

namespace NorteSur\PaginasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NorteSurPaginasBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function homeAction(){
        
        
        return $this->render('NorteSurPaginasBundle:Default:home.html.twig');
        
        
    }
    
    
    
    
    public function contactoAction(){
        
        return $this->render('NorteSurPaginasBundle:Default:contacto.html.twig');
    }
    
    
    
      public function propiedadesAction(){
        
        
        return $this->render('NorteSurPaginasBundle:Default:propiedades.html.twig');
        
        
    }
}
