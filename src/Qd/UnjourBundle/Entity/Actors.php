<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actors
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\ActorsRepository")
 */
class Actors
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth", type="datetime")
     */
    private $birth;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="death", type="datetime")
     */
    private $death;

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
     * @ORM\ManyToOne(targetEntity="Photos", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $photos;

    /**
     * @var integer
     *
     * @ORM\ManyToMany(targetEntity="Tags", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }



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
     * Set name
     *
     * @param string $name
     * @return Actors
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Actors
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     * @return Actors
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime 
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set death
     *
     * @param \DateTime $death
     * @return Actors
     */
    public function setDeath($death)
    {
        $this->death = $death;

        return $this;
    }

    /**
     * Get death
     *
     * @return \DateTime 
     */
    public function getDeath()
    {
        return $this->death;
    }

    /**
     * Set pres
     *
     * @param string $pres
     * @return Actors
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
     * @return Actors
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
     * Set photos
     *
     * @param Photos $photos
     * @return Actors
     */
    public function setPhotos(Photos $photos = null)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return Photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set tags
     *
     * @param Tags $tags
     * @return Actors
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return Tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add tags
     *
     * @param Tags $tags
     * @return Actors
     */
    public function addTag(Tags $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param Tags $tags
     */
    public function removeTag(Tags $tags)
    {
        $this->tags->removeElement($tags);
    }
}
