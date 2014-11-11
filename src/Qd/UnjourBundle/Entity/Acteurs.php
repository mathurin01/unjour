<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteurs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\ActeursRepository")
 */
class Acteurs
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_nais", type="datetime")
     */
    private $dateNais;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deces", type="datetime")
     */
    private $dateDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="pres", type="text")
     */
    private $pres;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="text")
     */
    private $descr;

    /**
     * @var integer
     *
     * @ORM\Column(name="photosid", type="integer")
     */
    private $photosid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagsid", type="integer")
     */
    private $tagsid;


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
     * Set nom
     *
     * @param string $nom
     * @return Acteurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Acteurs
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNais
     *
     * @param \DateTime $dateNais
     * @return Acteurs
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    /**
     * Get dateNais
     *
     * @return \DateTime 
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * Set dateDeces
     *
     * @param \DateTime $dateDeces
     * @return Acteurs
     */
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    /**
     * Get dateDeces
     *
     * @return \DateTime 
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Set pres
     *
     * @param string $pres
     * @return Acteurs
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
     * Set descr
     *
     * @param string $descr
     * @return Acteurs
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
     * Set photosid
     *
     * @param integer $photosid
     * @return Acteurs
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
     * Set tagsid
     *
     * @param integer $tagsid
     * @return Acteurs
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
}
