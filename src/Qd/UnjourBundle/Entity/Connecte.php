<?php

namespace Qd\UnjourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connecte
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Connecte
{
    /*
     * Le principe : cette table est basée sur le tuto :
     * http://openclassrooms.com/courses/affichez-le-nombre-de-visiteurs-connectes#ss_part_1
     *
     *  $retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
        $donnees = mysql_fetch_array($retour);
        if ($donnees['nbre_entrees'] == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
        {
            mysql_query('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
        }
        else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
        {
            mysql_query('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
        }
        // -------
        // ÉTAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes.
        // On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
        $timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
        mysql_query('DELETE FROM connectes WHERE timestamp < ' . $timestamp_5min);
        // -------
        // ÉTAPE 3 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
        $retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connectes');
        $donnees = mysql_fetch_array($retour);
        // Ouf ! On n'a plus qu'à afficher le nombre de connectés !
        echo '<p>Il y a actuellement ' . $donnees['nbre_entrees'] . ' visiteurs connectés sur mon site !</p>';
        ?>
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateconnect", type="date")
     */
    private $dateconnect;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="string", length=255)
     */
    private $page;


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
     * @return Connecte
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
     * Set dateconnect
     *
     * @param \DateTime $dateconnect
     * @return Connecte
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

    /**
     * Set page
     *
     * @param string $page
     * @return Connecte
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string 
     */
    public function getPage()
    {
        return $this->page;
    }
}
