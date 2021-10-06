<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurFixtures extends Fixture {

    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    /**
     * @param ObjectManager $manager
     */
    public function load( ObjectManager $manager ) {

        $utilisateur1 = new Utilisateur();
        $utilisateur1->setAdresse('Rue Fernand Robert, 35000 Rennes');
        $utilisateur1->setEmail('espi.rennes@epsi.fr');
        $utilisateur1->setNomEntreprise('EPSI - Campus de Rennes');
        $utilisateur1->setSiren('393504816');
        $utilisateur1->setRoles(['ROLE_ECOLE']);
        $utilisateur1->setPassword($this->passwordHasher->hashPassword($utilisateur1, '0000'));
        $utilisateur1->setSiteWeb('epsi.fr');
        $manager->persist($utilisateur1);
        $this->addReference("utilisateur1",$utilisateur1);

        $utilisateur2 = new Utilisateur();
        $utilisateur2->setAdresse('16 Bd Général de Gaulle, 44200 Nantes');
        $utilisateur2->setEmail('epsi.nantes@epsi.fr');
        $utilisateur2->setNomEntreprise('EPSI - Campus de Nantes');
        $utilisateur2->setSiren('393504816');
        $utilisateur2->setRoles(['ROLE_ECOLE']);
        $utilisateur2->setPassword($this->passwordHasher->hashPassword($utilisateur2, '0000'));
        $utilisateur2->setSiteWeb('epsi.fr');
        $manager->persist($utilisateur2);
        $this->addReference("utilisateur2",$utilisateur2);

        $manager->flush();
    }

}