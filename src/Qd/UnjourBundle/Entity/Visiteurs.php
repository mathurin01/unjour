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
    public function __construct(){
        $this->setFirstCon(new \DateTime('now'));
        $this->setLastCon(new \DateTime('0000-00-00 00:00:00'));
        $this->setNb(1);
    }

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
     * @ORM\Column(name="adrip", type="integer")
     */
    private $adrIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="firstcon", type="date")
     */
    private $firstCon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastcon", type="date")
     */
    private $lastCon;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb", type="integer")
     */
    private $nb;


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
     * @param integer $adrIp
     * @return Visiteurs
     */
    public function setAdrIp($adrIp)
    {
        // http://www.fobec.com/php5/1018/stocker-une-adresse-dans-une-mysql.html
        $this->adrIp = ip2long($adrIp);

        return $this;
    }

    /**
     * Get adrIp
     *
     * @return integer 
     */
    public function getAdrIp()
    {
        return $this->inet_ntoa(adrIp);
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
     * Set nb
     *
     * @param integer $nb
     * @return Visiteurs
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb
     *
     * @return integer 
     */
    public function getNb()
    {
        return $this->nb;
    }
}
