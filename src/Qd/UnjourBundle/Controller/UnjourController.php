<?php
// src/Qd/UnjourBundle/Controller/UnjourController.php

namespace Qd\UnjourBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UnjourController extends Controller
{
	public function indexAction()
	{
        $repo = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Publicites');
        $pub = $repo->findById(1);

		return $this->render('QdUnjourBundle:Unjour:index.html.twig',
                array('nom' => 'Jérôme', 'pub' => $pub));
	}
}

