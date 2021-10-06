<?php

namespace App\DataFixtures;

use App\Entity\Label;
use App\Entity\Utilisateur;
use App\Entity\UtilisateurLabel;
use Doctrine\Persistence\ObjectManager;

class UtilisateurLabelFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $certification1 = new UtilisateurLabel();
        $certification1->setUtilisateur($this->getReference('utilisateur1'));
        $certification1->setLabel($this->getReference('label1'));
        $certification1->setDateObtention(new \DateTime('2000-01-01'));
        $certification1->setNote('15');
        $manager->persist($certification1);

        $certification2 = new UtilisateurLabel();
        $certification2->setUtilisateur($this->getReference('utilisateur2'));
        $certification2->setLabel($this->getReference('label1'));
        $certification2->setDateObtention(new \DateTime('2000-01-01'));
        $certification2->setNote('18');
        $manager->persist($certification2);

        $certification3 = new UtilisateurLabel();
        $certification3->setUtilisateur($this->getReference('utilisateur3'));
        $certification3->setLabel($this->getReference('label1'));
        $certification3->setDateObtention(new \DateTime('2021-05-03'));
        $certification3->setNote('10.6');
        $manager->persist($certification3);

        $certification4 = new UtilisateurLabel();
        $certification4->setUtilisateur($this->getReference('utilisateur4'));
        $certification4->setLabel($this->getReference('label1'));
        $certification4->setDateObtention(new \DateTime('2020-09-03'));
        $certification4->setNote('18.4');
        $manager->persist($certification4);

        $certification5 = new UtilisateurLabel();
        $certification5->setUtilisateur($this->getReference('utilisateur5'));
        $certification5->setLabel($this->getReference('label1'));
        $certification5->setDateObtention(new \DateTime('2021-02-01'));
        $certification5->setNote('15');
        $manager->persist($certification5);

        $certification6 = new UtilisateurLabel();
        $certification6->setUtilisateur($this->getReference('utilisateur6'));
        $certification6->setLabel($this->getReference('label1'));
        $certification6->setDateObtention(new \DateTime('2019-11-10'));
        $certification6->setNote('18.9');
        $manager->persist($certification6);

        $certification7 = new UtilisateurLabel();
        $certification7->setUtilisateur($this->getReference('utilisateur7'));
        $certification7->setLabel($this->getReference('label1'));
        $certification7->setDateObtention(new \DateTime('2021-02-03'));
        $certification7->setNote('12.3');
        $manager->persist($certification7);

        $certification8 = new UtilisateurLabel();
        $certification8->setUtilisateur($this->getReference('utilisateur8'));
        $certification8->setLabel($this->getReference('label1'));
        $certification8->setDateObtention(new \DateTime('2021-02-05'));
        $certification8->setNote('16.2');
        $manager->persist($certification8);

        $certification9 = new UtilisateurLabel();
        $certification9->setUtilisateur($this->getReference('utilisateur9'));
        $certification9->setLabel($this->getReference('label1'));
        $certification9->setDateObtention(new \DateTime('2004-09-09'));
        $certification9->setNote('17.6');
        $manager->persist($certification9);

        $certification10 = new UtilisateurLabel();
        $certification10->setUtilisateur($this->getReference('utilisateur10'));
        $certification10->setLabel($this->getReference('label1'));
        $certification10->setDateObtention(new \DateTime('2010-10-01'));
        $certification10->setNote('19');
        $manager->persist($certification10);


        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            Label::class,
            Utilisateur::class
        ];
    }
}