<?php

namespace App\DataFixtures;

use App\Entity\Label;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LabelFixtures extends Fixture {

    /**
     * @param ObjectManager $manager
     */
    public function load( ObjectManager $manager ) {

        $label1 = new Label();
        $label1->setDescription('');
        $label1->setNom('');
        $label1->setUrlImage('');
        $manager->persist($label1);
        $this->addReference("label1",$label1);

        $label2 = new Label();
        $label2->setDescription('');
        $label2->setNom('');
        $label2->setUrlImage('');
        $manager->persist($label2);
        $this->addReference("label2",$label2);

        $manager->flush();
    }

}