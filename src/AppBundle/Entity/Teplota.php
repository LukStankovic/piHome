<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teplota
 *
 * @ORM\Table(name="teplota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeplotaRepository")
 */
class Teplota
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="datetime")
     */
    private $datum;

    /**
     * @var float
     *
     * @ORM\Column(name="teplota", type="float")
     */
    private $teplota;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Teplota
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set teplota
     *
     * @param float $teplota
     *
     * @return Teplota
     */
    public function setTeplota($teplota)
    {
        $this->teplota = $teplota;

        return $this;
    }

    /**
     * Get teplota
     *
     * @return float
     */
    public function getTeplota()
    {
        return $this->teplota;
    }

	/**
	 * @param $dateTime
	 * @return string
	 */
    public function timeAgo($dateTime) {
	    $periods = array("sek.", "min.", "hod.", "d.", "t.", "měs.", "r.");

	    $lengths = array("60","60","24","7","4.35","12");
	    if(!is_int($dateTime))
		    $dateTime = strtotime($dateTime);

	    $difference = time() - $dateTime;

	    $difference = round($difference);

	    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
		    $difference /= $lengths[$j];
	    }


	    return round($difference)." ".$periods[$j];
    }

	public function boxColor(){
    	$temp = $this->getTeplota();
		if($temp < 18) {
			$color = "#3D8EB9";
		} elseif ($temp >= 18 && $temp < 20) {
			$color = "#83D6DE";
		} elseif ($temp >= 20 && $temp < 23) {
			$color = "#F29B34";
		} elseif ($temp >= 23 && $temp < 25) {
			$color = "#FF7416";
		} elseif ($temp >= 25) {
			$color = "#F04903";
		} else {
			$color = "#7f8c8d";
		}
		return $color;
	}
}

