<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * visitesjour
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class visitesjour
{

    /*
     * ref : http://openclassrooms.com/courses/des-statistiques-pour-votre-site
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
     * @var integer
     *
     * @ORM\Column(name="nbvisite", type="integer")
     */
    private $nbvisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datejour", type="date")
     */
    private $datejour;


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
     * Set nbvisite
     *
     * @param integer $nbvisite
     * @return visitesjour
     */
    public function setNbvisite($nbvisite)
    {
        $this->nbvisite = $nbvisite;

        return $this;
    }

    /**
     * Get nbvisite
     *
     * @return integer 
     */
    public function getNbvisite()
    {
        return $this->nbvisite;
    }

    /**
     * Set datejour
     *
     * @param \DateTime $datejour
     * @return visitesjour
     */
    public function setDatejour($datejour)
    {
        $this->datejour = $datejour;

        return $this;
    }

    /**
     * Get datejour
     *
     * @return \DateTime 
     */
    public function getDatejour()
    {
        return $this->datejour;
    }
}
