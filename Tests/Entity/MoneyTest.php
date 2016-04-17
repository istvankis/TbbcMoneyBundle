<?php
/**
 * Created by PhpStorm.
 * User: istvan
 * Date: 17/04/16
 * Time: 08:32
 */

namespace Tbbc\MoneyBundle\Tests\Entity;


use Tbbc\MoneyBundle\Entity\Money;
use Tbbc\MoneyBundle\Tests\BundleOrmTestCase;
use Tbbc\MoneyBundle\Tests\TestEntity\MoneyTestEntity;


class MoneyTest extends BundleOrmTestCase
{
    public function testMoneyEntity()
    {
        $money = new MoneyTestEntity();
        $price = new Money();
        $price->setPrice(100);
        $price->setCurrency('EUR');
        $money->setPrice($price);

        $this->em->persist($money);
        $this->em->flush();

        $moneyRepository = $this->em->getRepository(MoneyTestEntity::class);
        $moneyFromRepository = $moneyRepository->find(1);

        $this->assertEquals($money, $moneyFromRepository);

    }

}