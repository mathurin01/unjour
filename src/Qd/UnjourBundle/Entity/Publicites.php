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
     * @ORM\Column(name="dateparution", type="date")
     */
    private $dateParution;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\OneToOne(targetEntity="Qd\UnjourBundle\Entity\ListeJournaux")
     * @ORM\JoinColumn(name="journalid", referencedColumnName="id")
     */
    private $journalId;


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
     * Set pathphp app/console
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
     * Get dateParution
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set dateParution
     *
     * @param \DateTime $dateParution
     * @return Publicites
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
     * @param Qd\UnjourBundle\Entity\ListeJournaux $journalid
     * @return Journalid
     */
    public function setJournalId(Qd\UnjourBundle\Entity\ListeJournaux $journalid = null)
    {
        $this->journalId = $journalid;

        return $this;
    }

    /**
     * Get journalId
     *
     * @return integer 
     */
    public function getJournalId()
    {
        return $this->journalId;
    }
}
