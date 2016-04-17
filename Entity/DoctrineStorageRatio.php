<?php

namespace Tbbc\MoneyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DoctrineStorageRatio
 * @package Tbbc\MoneyBundle\Entity
 * @ORM\Entity
 */
class DoctrineStorageRatio
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=3)
     */
    private $currencyCode;

    /**
     * @var integer
     * @ORM\Column(type="float")
     */
    private $ratio;
    
    public function __construct($code = null, $ratio = null) 
    {
        $this->currencyCode = $code;
        $this->ratio = $ratio;
    }

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
     * Get currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set code
     *
     * @param  string $currencyCode
     * @return DoctrineStorageRatio
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * get ratio
     *
     * @return float
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set ratio
     *
     * @param  float    $ratio
     * @return DoctrineStorageRatio
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

        return $this;
    }
}
