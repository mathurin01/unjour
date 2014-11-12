<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrono
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\ChronoRepository")
 */
class Chrono
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
     * @ORM\Column(name="datedeb", type="datetime")
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text")
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="pres", type="text")
     */
    private $pres;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="text")
     */
    private $bilan;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text")
     */
    private $source;

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
     * @var integer
     *
     * @ORM\Column(name="acteursid", type="integer")
     */
    private $acteursId;


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
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     * @return Chrono
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Chrono
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set descr
     *
     * @param string $descr
     * @return Chrono
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set pres
     *
     * @param string $pres
     * @return Chrono
     */
    public function setPres($pres)
    {
        $this->pres = $pres;

        return $this;
    }

    /**
     * Get pres
     *
     * @return string 
     */
    public function getPres()
    {
        return $this->pres;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     * @return Chrono
     */
    public function setBilan($bilan)
    {
        $this->bilan = $bilan;

        return $this;
    }

    /**
     * Get bilan
     *
     * @return string 
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Chrono
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set tagsid
     *
     * @param integer $tagsid
     * @return Chrono
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
     * @return Chrono
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

    /**
     * Set acteursId
     *
     * @param integer $acteursId
     * @return Chrono
     */
    public function setActeursId($acteursId)
    {
        $this->acteursId = $acteursId;

        return $this;
    }

    /**
     * Get acteursId
     *
     * @return integer 
     */
    public function getActeursId()
    {
        return $this->acteursId;
    }
}
