<?php
// src/Qd/UnjourBundle/Controller/UnjourController.php

namespace Qd\UnjourBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UnjourController extends Controller
{
	public function indexAction()
	{
		return $this->render('QdUnjourBundle:Unjour:index.html.twig', array('nom' => 'Jérôme'));
	}
}

