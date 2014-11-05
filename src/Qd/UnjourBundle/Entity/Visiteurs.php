<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiteurs
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qd\UnjourBundle\Entity\VisiteursRepository")
 */
class Visiteurs
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
     * @ORM\Column(name="adr_ip", type="string", length=15)
     */
    private $adrIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="adr_ip_int", type="integer")
     */
    private $adrIpInt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_con", type="date")
     */
    private $firstCon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_con", type="date")
     */
    private $lastCon;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_con", type="integer")
     */
    private $nbCon;


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
     * Set adrIp
     *
     * @param string $adrIp
     * @return Visiteurs
     */
    public function setAdrIp($adrIp)
    {
        $this->adrIp = $adrIp;

        return $this;
    }

    /**
     * Get adrIp
     *
     * @return string 
     */
    public function getAdrIp()
    {
        return $this->adrIp;
    }

    /**
     * Set adrIpInt
     *
     * @param integer $adrIpInt
     * @return Visiteurs
     */
    public function setAdrIpInt($adrIpInt)
    {
        $this->adrIpInt = $adrIpInt;

        return $this;
    }

    /**
     * Get adrIpInt
     *
     * @return integer 
     */
    public function getAdrIpInt()
    {
        return $this->adrIpInt;
    }

    /**
     * Set firstCon
     *
     * @param \DateTime $firstCon
     * @return Visiteurs
     */
    public function setFirstCon($firstCon)
    {
        $this->firstCon = $firstCon;

        return $this;
    }

    /**
     * Get firstCon
     *
     * @return \DateTime 
     */
    public function getFirstCon()
    {
        return $this->firstCon;
    }

    /**
     * Set lastCon
     *
     * @param \DateTime $lastCon
     * @return Visiteurs
     */
    public function setLastCon($lastCon)
    {
        $this->lastCon = $lastCon;

        return $this;
    }

    /**
     * Get lastCon
     *
     * @return \DateTime 
     */
    public function getLastCon()
    {
        return $this->lastCon;
    }

    /**
     * Set nbCon
     *
     * @param integer $nbCon
     * @return Visiteurs
     */
    public function setNbCon($nbCon)
    {
        $this->nbCon = $nbCon;

        return $this;
    }

    /**
     * Get nbCon
     *
     * @return integer 
     */
    public function getNbCon()
    {
        return $this->nbCon;
    }
}
