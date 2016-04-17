<?php
/**
 * Created by PhpStorm.
 * User: istvan
 * Date: 17/04/16
 * Time: 09:53
 */

namespace Tbbc\MoneyBundle\Tests\TestEntity;

use Doctrine\ORM\Mapping as ORM;
use Tbbc\MoneyBundle\Entity\Money;

/**
 * Class MoneyTestEntity
 * @package Tbbc\MoneyBundle\Tests\TestEntity
 * @ORM\Entity
 */
class MoneyTestEntity
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Money
     * @ORM\Embedded(class="Tbbc\MoneyBundle\Entity\Money")
     */
    private $price;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Money
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Money $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}