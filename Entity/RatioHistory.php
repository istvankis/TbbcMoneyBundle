<?php
namespace Tbbc\MoneyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class RatioHistory
 * @package Tbbc\MoneyBundle\Entity
 * @ORM\Entity
 */
class RatioHistory
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string", length=3)
     */
    protected $referenceCurrencyCode;
    /**
     * @var string
     * @ORM\Column(type="string", length=3)
     */
    protected $currencyCode;
    /**
     * @var integer
     * @ORM\Column(type="float")
     */
    protected $ratio;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $savedAt;

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * @param float $ratio
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
    }

    /**
     * @return string
     */
    public function getReferenceCurrencyCode()
    {
        return $this->referenceCurrencyCode;
    }

    /**
     * @param string $referenceCurrencyCode
     */
    public function setReferenceCurrencyCode($referenceCurrencyCode)
    {
        $this->referenceCurrencyCode = $referenceCurrencyCode;
    }

    /**
     * @return \DateTime
     */
    public function getSavedAt()
    {
        return $this->savedAt;
    }

    /**
     * @param \DateTime $savedAt
     */
    public function setSavedAt($savedAt)
    {
        $this->savedAt = $savedAt;
    }


} 