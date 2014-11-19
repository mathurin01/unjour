<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrontNewspapers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\FrontNewspapersRepository")
 */
class FrontNewspapers
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Newspapers", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $newspaper;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="permalien", type="string", length=255)
     */
    private $permalien;

    /**
     * @var string
     *
     * @ORM\Column(name="vignetteexport", type="string", length=255)
     */
    private $vignetteExport;

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
     * Set dcreat
     *
     * @param \Date $dcreat
     * @return FrontNewspapers
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
     * Set newspaper
     *
     * @param Newspapers $newspaper
     * @return FrontNewspapers
     */
    public function setNewspaper(Newspapers $newspaper = null)
    {
        $this->newspaper = $newspaper;

        return $this;
    }

    /**
     * Get newspaper
     *
     * @return \Qd\UnjourBundle\Entity\Newspapers
     */
    public function getNewspaper()
    {
        return $this->newspaper;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return FrontNewspapers
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
     * Set permalien
     *
     * @param string $permalien
     * @return FrontNewspapers
     */
    public function setPermalien($permalien)
    {
        $this->permalien = $permalien;

        return $this;
    }

    /**
     * Get permalien
     *
     * @return string 
     */
    public function getPermalien()
    {
        return $this->permalien;
    }

    /**
     * Set vignetteExport
     *
     * @param string $vignetteExport
     * @return FrontNewspapers
     */
    public function setVignetteExport($vignetteExport)
    {
        $this->vignetteExport = $vignetteExport;

        return $this;
    }

    /**
     * Get vignetteExport
     *
     * @return string 
     */
    public function getVignetteExport()
    {
        return $this->vignetteExport;
    }

    /**
     * Set tags
     *
     * @param Tags $tags
     * @return FrontNewspapers
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
     * @return FrontNewspapers
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
