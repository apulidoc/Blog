<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlogBundle:Default:index.html.twig', array('name' => $name));
    }

	/**
	 * @Route("/inicio", name="_blog_inicio")
	 * @Template()
	 */
	public function inicioAction()
	{
	    $this->render('BlogBundle:Default:inicio.html.twig', array('name' => 'Adrian Pulido'));
	}
}
