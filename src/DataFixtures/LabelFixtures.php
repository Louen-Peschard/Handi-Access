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
        $label1->setUrlImage('logo_label.png');
        $manager->persist($label1);
        $this->addReference("label1",$label1);

        $label2 = new Label();
        $label2->setDescription('Label handicap moteur');
        $label2->setNom('HandiAccess Moteur');
        $label2->setUrlImage('logo_moteur.png');
        $manager->persist($label2);
        $this->addReference("label2",$label2);

        $label3 = new Label();
        $label3->setDescription('Label handicap auditif');
        $label3->setNom('HandiAccess Audio');
        $label3->setUrlImage('logo_audio.png');
        $manager->persist($label3);
        $this->addReference("label3",$label3);

        $label4 = new Label();
        $label4->setDescription('Label handicap visuel');
        $label4->setNom('HandiAccess Visuel');
        $label4->setUrlImage('logo_visuel.png');
        $manager->persist($label4);
        $this->addReference("label4",$label4);

        $label5 = new Label();
        $label5->setDescription('Label handicap autisme (TED)');
        $label5->setNom('HandiAccess Autisme');
        $label5->setUrlImage('logo_autisme.png');
        $manager->persist($label5);
        $this->addReference("label5",$label5);

        $label6 = new Label();
        $label6->setDescription('Label handicap dys');
        $label6->setNom('HandiAccess Dys');
        $label6->setUrlImage('logo_dys.png');
        $manager->persist($label6);
        $this->addReference("label6",$label6);

        $label7 = new Label();
        $label7->setDescription('Label handicap mental');
        $label7->setNom('HandiAccess Mental');
        $label7->setUrlImage('logo_mental.png');
        $manager->persist($label7);
        $this->addReference("label7",$label7);

        $label8 = new Label();
        $label8->setDescription('Label handicap Psychique');
        $label8->setNom('HandiAccess Psychique');
        $label8->setUrlImage('logo_psychique.png');
        $manager->persist($label8);
        $this->addReference("label8",$label8);


        $manager->flush();
    }

}