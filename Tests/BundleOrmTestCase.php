<?php
namespace Tbbc\MoneyBundle\Tests;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class BundleOrmTestCase extends KernelTestCase
{

    /**
     * @var EntityManager
     */
    protected $em;

    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
        $driverChain = $this->em->getConfiguration()->getMetadataDriverImpl();

        $reader = new CachedReader(new AnnotationReader(), new ArrayCache());
        $annotationDriver = new AnnotationDriver(
            $reader, [
                __DIR__.'/TestEntity',
            ]
        );
        $driverChain->addDriver($annotationDriver, 'Tbbc\MoneyBundle\Tests\TestEntity');

        $entityNamespaces = $this->em->getConfiguration()->getEntityNamespaces();
        $entityNamespaces['TestEntity'] = 'Tbbc\MoneyBundle\Tests\TestEntity';
        $this->em->getConfiguration()->setEntityNamespaces($entityNamespaces);

        //$this->em->getConfiguration()->setMetadataDriverImpl($driverChain);

        $metadatas = $this->em->getMetadataFactory()->getAllMetadata();
        $schemaTool = new SchemaTool($this->em);
        $schemaTool->dropDatabase();
        $schemaTool->createSchema($metadatas);

    }

    /**
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        return $this->em;
    }
}
