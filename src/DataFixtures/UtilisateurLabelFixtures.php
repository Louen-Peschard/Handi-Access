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
        $certification2->setLabel($this->getReference('label2'));
        $certification2->setDateObtention(new \DateTime('2000-01-01'));
        $certification2->setNote('18');
        $manager->persist($certification2);

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