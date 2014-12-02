<?php
// src/Qd/UnjourBundle/Controller/UnjourController.php

namespace Qd\UnjourBundle\Controller;


use Qd\UnjourBundle\Entity\ListeJournaux;
use Qd\UnjourBundle\Entity\Tags;
use Qd\UnjourBundle\Entity\UnesJournaux;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UnjourController extends Controller
{
	public function indexAction($page)
	{
        $pubs           = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Publicites')->myFindByAll();
        $actors         = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Actors')->myFindByAll();
        $books          = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Books')->myFindByBooks();
        $facts          = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Chronos')->myFindByFacts(10, $page);
        $events         = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Chronos')->myFindByEvents(12, $page);
        $today          = new \DateTime('today');
        $madate = $today->sub(new \DateInterval('P100Y'));
        $madate->format('Y-m-d');
        $front          = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:FrontNewspapers')->myFindByDate($madate);
        $open           = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Opendata')->myFindByAll();
        $jour = new \DateTime('2014-11-06');
        //var_dump($jour);
        $nbclicjour     = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Visitors')->myNbClicJour($jour->format('Y-m-d'));
        $jseven         = $jour->sub(new \DateInterval('P7D'));
        $nbclicweek     = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Visitors')->myNbClicWeek($jseven->format('Y-m-d'));
        $jthirty        = $jour->sub(new \DateInterval('P30D'));
        $nbclicmonth    = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Visitors')->myNbClicWeek($jthirty->format('Y-m-d'));
        $bestip         = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Visitors')->myBestIp();
        $bestday        = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Visitors')->myBestDay();
        $tags           = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Tags')->FindAll();
        $marine         = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Chronos')->myFindByTags(7);
        $gaz            = $this->getDoctrine()->getManager()->getRepository('QdUnjourBundle:Photos')->myFindByTags(23);


		return $this->render('QdUnjourBundle:Unjour:index.html.twig', array(
            'pubs'      => $pubs,
            'actors'    => $actors,
            'books'     => $books,
            'facts'     => $facts,
            'events'    => $events,
            'page'      => $page,
            'nbPageF'   => ceil(count($facts)/10),
            'nbPageE'   => ceil(count($events)/12),
            'front'     => $front,
            'open'      => $open,
            'nbclicjour'    => $nbclicjour,
            'nbclicweek'    => $nbclicweek,
            'nbclicmonth'   => $nbclicmonth,
            'bestip'        => $bestip,
            'bestday'       => $bestday,
            'tags'          => $tags,
            'marine'        => $marine,
            'gaz'           => $gaz,
        ));
	}
}

