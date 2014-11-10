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
     * @ORM\ManyToOne(targetEntity="Qd\UnjourBundle\Entity\Tags")
     * @ORM\OneToOne(targetEntity="Qd\UnjourBundle\Entity\ListeJournaux")
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
     * @ORM\Column(name="date_parution", type="date")
     */
    private $dateParution;

    /**
     * @var integer
     *
     * @ORM\Column(name="journal_id", type="integer")
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
     * @param integer $journalId
     * @return Publicites
     */
    public function setJournalId($journalId)
    {
        $this->journalId = $journalId;

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
