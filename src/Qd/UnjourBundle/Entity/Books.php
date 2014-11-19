<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\BooksRepository")
 */
class Books
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
     * @ORM\Column(name="dcreat", type="date")
     */
    private $dcreat;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="thanks", type="text")
     */
    private $thanks;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Actors", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $actors;

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
     * Set dcreat
     *
     * @param \Date $dcreat
     * @return Books
     */
    public function setDcreat($dcreat)
    {
        $this->dcreat = $dcreat;

        return $this;
    }

    /**
     * Get dcreat
     *
     * @return \Date
     */
    public function getDcreat()
    {
        return $this->dcreat;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Books
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
     * Set thanks
     *
     * @param string $thanks
     * @return Books
     */
    public function setThanks($thanks)
    {
        $this->thanks = $thanks;

        return $this;
    }

    /**
     * Get thanks
     *
     * @return string 
     */
    public function getThanks()
    {
        return $this->thanks;
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
     * Set tags
     *
     * @param Tags $tags
     * @return Books
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
     * Get photos
     *
     * @return Photos
     */
    public function getPhotos()
    {
        return $this->photos;
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
     * Add tags
     *
     * @param Tags $tags
     * @return Books
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
