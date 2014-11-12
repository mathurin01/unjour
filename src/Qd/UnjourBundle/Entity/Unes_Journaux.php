<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unes_Journaux
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\Unes_JournauxRepository")
 */
class Unes_Journaux
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
     * @ORM\Column(name="dateparution", type="date")
     */
    private $dateParution;

    /**
     * @var integer
     *
     * @ORM\Column(name="journalid", type="integer")
     */
    private $journalId;

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
     * @ORM\Column(name="vignette_export", type="string", length=255)
     */
    private $vignetteExport;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagsid", type="integer")
     */
    private $tagsId;


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
     * Set dateParution
     *
     * @param \DateTime $dateParution
     * @return Unes_Journaux
     */
    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get dateParution
     *
     * @return \DateTime 
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     * Set journalId
     *
     * @param integer $journalId
     * @return Unes_Journaux
     */
    public function setJournalId($journalId)
    {
        $this->journalId = $journalId;

        return $this;
    }

    /**
     * Get jorunalId
     *
     * @return integer 
     */
    public function getJournalId()
    {
        return $this->journalId;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Unes_Journaux
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
     * @return Unes_Journaux
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
     * @return Unes_Journaux
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
     * Set tagsId
     *
     * @param integer $tagsId
     * @return Unes_Journaux
     */
    public function setTagsId($tagsId)
    {
        $this->tagsId = $tagsId;

        return $this;
    }

    /**
     * Get tagsId
     *
     * @return integer 
     */
    public function getTagsId()
    {
        return $this->tagsId;
    }
}
