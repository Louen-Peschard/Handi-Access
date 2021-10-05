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
        $utilisateur1->setAdresse('');
        $utilisateur1->setEmail('');
        $utilisateur1->setNomEntreprise('EPSI - Campus de Rennes');
        $utilisateur1->setSiren('');
        $utilisateur1->setRoles(['ROLE_ECOLE']);
        $utilisateur1->setPassword($this->passwordHasher->hashPassword($utilisateur1, '0000'));
        $manager->persist($utilisateur1);
        $this->addReference("utilisateur1",$utilisateur1);

        $utilisateur2 = new Utilisateur();
        $utilisateur2->setAdresse('');
        $utilisateur2->setEmail('');
        $utilisateur2->setNomEntreprise('EPSI - Campus de Nantes');
        $utilisateur2->setSiren('');
        $utilisateur2->setRoles(['ROLE_ECOLE']);
        $utilisateur2->setPassword($this->passwordHasher->hashPassword($utilisateur2, '0000'));
        $manager->persist($utilisateur2);
        $this->addReference("utilisateur2",$utilisateur2);

        $manager->flush();
    }

}