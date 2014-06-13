<?php

namespace Mesd\ApyDataGridTestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mesd\ApyDataGridTestBundle\Entity\Another;

class AnotherFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 7427; $i++) {
            $another = new Another();
            $this->addReference('another_' . strval($i), $another);
            $another->setExampleBoolean(1 === mt_rand(0, 1));
            $another->setExampleInteger(mt_rand(256, 1024));
            $another->setExampleSmallInt(mt_rand(256, 1024));
            $another->setExampleBigInt(mt_rand(256, 1024));
            $another->setExampleString(strval(mt_rand(256, 1024)));
            $another->setExampleText(strval(mt_rand(256, 1024)));
            $beginRange = new \DateTime('2010-01-01');
            $endRange = new \DateTime('2020-12-31');
            $randomTimestamp = mt_rand($beginRange->getTimestamp(), $endRange->getTimestamp());
            $randomDatetime = new \DateTime();
            $randomDatetime->setTimestamp($randomTimestamp);
            $another->setExampleDatetime($randomDatetime);
            $randomTimestamp = mt_rand($beginRange->getTimestamp(), $endRange->getTimestamp());
            $randomDatetime = new \DateTime();
            $randomDatetime->setTimestamp($randomTimestamp);
            $another->setExampleDate($randomDatetime);
            $randomTimestamp = mt_rand($beginRange->getTimestamp(), $endRange->getTimestamp());
            $randomDatetime = new \DateTime();
            $randomDatetime->setTimestamp($randomTimestamp);
            $another->setExampleTime($randomDatetime);
            $another->setExampleDecimal(mt_rand(256, 1024));
            $another->setExampleFloat(mt_rand(256, 1024));

            $manager->persist($another);
        }

        $manager->flush();
    }
}
