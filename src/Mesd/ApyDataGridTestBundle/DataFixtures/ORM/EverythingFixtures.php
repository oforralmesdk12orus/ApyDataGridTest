<?php

namespace Mesd\ApyDataGridTestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mesd\ApyDataGridTestBundle\Entity\Everything;

class EverythingFixtures implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < mt_rand(256, 1024); $i++) {
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

            $manager->persist($everything);
        }

        $manager->flush();
    }
}
