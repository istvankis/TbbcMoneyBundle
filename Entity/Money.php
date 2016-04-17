<?php
/**
 * Created by PhpStorm.
 * User: istvan
 * Date: 17/04/16
 * Time: 08:25
 */

namespace Tbbc\MoneyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Money
 * @package Tbbc\MoneyBundle\Entity
 * @ORM\Embeddable
 */
class Money
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @var string
     * @ORM\Column(type="string", length=3)
     */
    private $currency;

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}