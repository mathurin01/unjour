<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\TagsRepository")
 */
class Tags
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
<<<<<<< HEAD
     * @ORM\Column(name="logo", type="string", length=255)
=======
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
>>>>>>> release_bdd
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="indice", type="integer")
     */
    private $indice;


    /**
     * Get id
     *
<<<<<<< HEAD
     * @return integer 
=======
     * @return integer
>>>>>>> release_bdd
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Tags
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
<<<<<<< HEAD
     * @return string 
=======
     * @return string
>>>>>>> release_bdd
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Tags
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
<<<<<<< HEAD
     * @return string 
=======
     * @return string
>>>>>>> release_bdd
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set indice
     *
     * @param integer $indice
     * @return Tags
     */
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get indice
     *
<<<<<<< HEAD
     * @return integer 
=======
     * @return integer
>>>>>>> release_bdd
     */
    public function getIndice()
    {
        return $this->indice;
    }
}
