<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chronos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\ChronosRepository")
 */
class Chronos
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
     * @var \Date
     *
     * @ORM\Column(name="startTime", type="date")
     */
    private $startTime;

    /**
     * @var \Date
     *
     * @ORM\Column(name="endTime", type="date")
     */
    private $endTime;

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
     * @ORM\ManyToMany(targetEntity="Tags", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $tags;

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
     * @ORM\ManyToOne(targetEntity="Actors", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $actors;

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
     * Set startTime
     *
     * @param \Date $startTime
     * @return Chronos
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \Date
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \Date $endTime
     * @return Chronos
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \Date
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set descr
     *
     * @param string $descr
     * @return Chronos
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
     * @return Chronos
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
     * @return Chronos
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
     * @return Chronos
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
     * Set tags
     *
     * @param Tags $tags
     * @return Chronos
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
     * Set photos
     *
     * @param Photos $photos
     * @return Photos
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
     * Set actors
     *
     * @param Actors $actors
     * @return Actors
     */
    public function setActors(Actors $actors = null)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return Actors
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Add tags
     *
     * @param Tags $tags
     * @return Chronos
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
