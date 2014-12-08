<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * provenance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class provenance
{

    /*
     * ref : http://openclassrooms.com/courses/geolocalisez-vos-visiteurs-grace-a-leur-ip
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
     * @ORM\Column(name="ip", type="integer")
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="httpreferer", type="text")
     */
    private $httpreferer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateconnect", type="datetime")
     */
    private $dateconnect;


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
     * Set ip
     *
     * @param integer $ip
     * @return provenance
     */
    public function setIp($ip)
    {
        $this->ip = ip2long($ip);

        return $this;
    }

    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return long2ip($this->ip);
    }

    /**
     * Set httpreferer
     *
     * @param string $httpreferer
     * @return provenance
     */
    public function setHttpreferer($httpreferer)
    {
        $this->httpreferer = $httpreferer;

        return $this;
    }

    /**
     * Get httpreferer
     *
     * @return string 
     */
    public function getHttpreferer()
    {
        return $this->httpreferer;
    }

    /**
     * Set dateconnect
     *
     * @param \DateTime $dateconnect
     * @return provenance
     */
    public function setDateconnect($dateconnect)
    {
        $this->dateconnect = $dateconnect;

        return $this;
    }

    /**
     * Get dateconnect
     *
     * @return \DateTime 
     */
    public function getDateconnect()
    {
        return $this->dateconnect;
    }
}
