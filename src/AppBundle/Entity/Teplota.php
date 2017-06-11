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
}

