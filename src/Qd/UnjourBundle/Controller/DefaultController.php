<?php

namespace Qd\UnjourBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QdUnjourBundle:Default:index.html.twig', array('name' => $name));
    }
}
