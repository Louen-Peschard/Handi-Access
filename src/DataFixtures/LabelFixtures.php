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
        $label1->setDescription('Label principal');
        $label1->setNom('HandiAccess');
        $label1->setUrlImage('https://drive.google.com/file/d/141zLBiJeSkUikKQrzhcOkKwCplQvYePe/view?usp=sharing');
        $manager->persist($label1);
        $this->addReference("label1",$label1);

        $label2 = new Label();
        $label2->setDescription('Label handicap moteur');
        $label2->setNom('HandiAccess Moteur');
        $label2->setUrlImage('https://drive.google.com/file/d/1ywXPfS-ySYkmt1e5_srCCCqd4Dw15XfL/view?usp=sharing');
        $manager->persist($label2);
        $this->addReference("label2",$label2);

        $manager->flush();
    }

}