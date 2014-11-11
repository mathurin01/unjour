<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carnets
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\CarnetsRepository")
 */
class Carnets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateredac", type="datetime")
     */
    private $dateredac;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="remerciement", type="text")
     */
    private $remerciement;

    /**
     * @var integer
     *
     * @ORM\Column(name="acteursid", type="integer")
     */
    private $acteursid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagsid", type="integer")
     */
    private $tagsid;

    /**
     * @var integer
     *
     * @ORM\Column(name="photosid", type="integer")
     */
    private $photosid;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateredac
     *
     * @param \DateTime $dateredac
     * @return Carnets
     */
    public function setDateredac($dateredac)
    {
        $this->dateredac = $dateredac;

        return $this;
    }

    /**
     * Get dateredac
     *
     * @return \DateTime 
     */
    public function getDateredac()
    {
        return $this->dateredac;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Carnets
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set remerciement
     *
     * @param string $remerciement
     * @return Carnets
     */
    public function setRemerciement($remerciement)
    {
        $this->remerciement = $remerciement;

        return $this;
    }

    /**
     * Get remerciement
     *
     * @return string 
     */
    public function getRemerciement()
    {
        return $this->remerciement;
    }

    /**
     * Set acteursid
     *
     * @param integer $acteursid
     * @return Carnets
     */
    public function setActeursid($acteursid)
    {
        $this->acteursid = $acteursid;

        return $this;
    }

    /**
     * Get acteursid
     *
     * @return integer 
     */
    public function getActeursid()
    {
        return $this->acteursid;
    }

    /**
     * Set tagsid
     *
     * @param integer $tagsid
     * @return Carnets
     */
    public function setTagsid($tagsid)
    {
        $this->tagsid = $tagsid;

        return $this;
    }

    /**
     * Get tagsid
     *
     * @return integer 
     */
    public function getTagsid()
    {
        return $this->tagsid;
    }

    /**
     * Set photosid
     *
     * @param integer $photosid
     * @return Carnets
     */
    public function setPhotosid($photosid)
    {
        $this->photosid = $photosid;

        return $this;
    }

    /**
     * Get photosid
     *
     * @return integer 
     */
    public function getPhotosid()
    {
        return $this->photosid;
    }
}
