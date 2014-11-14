<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicites
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\PublicitesRepository")
 */
class Publicites
{
    /**
     *
     *
     */


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
     * @ORM\Column(name="dcreat", type="date")
     */
    private $dcreat;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Newspapers")
     * @ORM\JoinColumn(nullable=true)
     */
    private $newspaper;

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
     * Set path
     *
     * @param string $path
     * @return Publicites
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set dcreat
     *
     * @param \DateTime $dcreat
     * @return Publicites
     */
    public function setDcreat($dcreat)
    {
        $this->dcreat = $dcreat;

        return $this;
    }

    /**
     * Get dcreat
     *
     * @return \DateTime
     */
    public function getDcreat()
    {
        return $this->dcreat;
    }

    /**
     * Set newspaper
     *
     * @param Newspapers $newspaper
     * @return Newspapers
     */
    public function setNewspaper(Newspapers $newspaper = null)
    {
        $this->newspaper = $newspaper;

        return $this;
    }

    /**
     * Get newspaper
     *
     * @return Newspapers
     */
    public function getNewspaper()
    {
        return $this->newspaper;
    }

    /**
     * Set tags
     *
     * @param Tags $tags
     * @return Tags
     */
    public function setTags(Tags $tags = null)
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
     * @return Publicites
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
