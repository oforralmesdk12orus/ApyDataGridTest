<?php

namespace Mesd\ApyDataGridTestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mesd\ApyDataGridTestBundle\Entity\Everything;

class EverythingFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $iMax = mt_rand(256, 1024);
        for ($i = 0; $i < $iMax; $i++) {
            $everything = new Everything();
            $everything->setSampleBoolean(1 === mt_rand(0, 1));
            $everything->setSampleInteger(mt_rand(256, 1024));
            $everything->setSampleSmallInt(mt_rand(256, 1024));
            $everything->setSampleBigInt(mt_rand(256, 1024));
            $everything->setSampleString(strval(mt_rand(256, 1024)));
            $everything->setSampleText(strval(mt_rand(256, 1024)));
            $beginRange = new \DateTime('2010-01-01');
            $endRange = new \DateTime('2020-12-31');
            $randomTimestamp = mt_rand($beginRange->getTimestamp(), $endRange->getTimestamp());
            $randomDatetime = new \DateTime();
            $randomDatetime->setTimestamp($randomTimestamp);
            $everything->setSampleDatetime($randomDatetime);
            $randomTimestamp = mt_rand($beginRange->getTimestamp(), $endRange->getTimestamp());
            $randomDatetime = new \DateTime();
            $randomDatetime->setTimestamp($randomTimestamp);
            $everything->setSampleDate($randomDatetime);
            $randomTimestamp = mt_rand($beginRange->getTimestamp(), $endRange->getTimestamp());
            $randomDatetime = new \DateTime();
            $randomDatetime->setTimestamp($randomTimestamp);
            $everything->setSampleTime($randomDatetime);
            $everything->setSampleDecimal(mt_rand(256, 1024));
            $everything->setSampleFloat(mt_rand(256, 1024));
            $jMax = mt_rand(0, 7);
            $alreadyAdded = array();
            for ($j = 0; $j < $jMax; $j++) {
                $index = strval(mt_rand(0, 7426));
                if (!array_key_exists($index, $alreadyAdded)) {
                    $everything->addAnother($this->getReference('another_' . $index));
                    $alreadyAdded[$index] = $index;
                }
            }

            $manager->persist($everything);
        }

        $manager->flush();
    }
}
