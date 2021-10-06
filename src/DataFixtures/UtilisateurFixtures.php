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

        $utilisateur3 = new Utilisateur();
        $utilisateur3->setAdresse('Rue Fernand Robert, 35000 Rennes');
        $utilisateur3->setEmail('wis.rennes@wis.fr');
        $utilisateur3->setNomEntreprise('WIS - Campus de Rennes');
        $utilisateur3->setSiren('410902704');
        $utilisateur3->setRoles(['ROLE_ECOLE']);
        $utilisateur3->setPassword($this->passwordHasher->hashPassword($utilisateur3, '0000'));
        $utilisateur3->setSiteWeb('wis.fr');
        $manager->persist($utilisateur3);
        $this->addReference("utilisateur3",$utilisateur3);

        $utilisateur4 = new Utilisateur();
        $utilisateur4->setAdresse('16 Bd Général de Gaulle, 44200 Nantes');
        $utilisateur4->setEmail('wis.nantes@wis.fr');
        $utilisateur4->setNomEntreprise('WIS - Campus de Nantes');
        $utilisateur4->setSiren('410902704');
        $utilisateur4->setRoles(['ROLE_ECOLE']);
        $utilisateur4->setPassword($this->passwordHasher->hashPassword($utilisateur4, '0000'));
        $utilisateur4->setSiteWeb('wis.fr');
        $manager->persist($utilisateur4);
        $this->addReference("utilisateur4",$utilisateur4);

        $utilisateur5 = new Utilisateur();
        $utilisateur5->setAdresse('19-22 Bd Saint-Conwoïon, 35000 Rennes');
        $utilisateur5->setEmail('epitech.rennes@epitech.fr');
        $utilisateur5->setNomEntreprise('Epitech - Campus de Rennes');
        $utilisateur5->setSiren('417617776');
        $utilisateur5->setRoles(['ROLE_ECOLE']);
        $utilisateur5->setPassword($this->passwordHasher->hashPassword($utilisateur5, '0000'));
        $utilisateur5->setSiteWeb('epitech.fr');
        $manager->persist($utilisateur5);
        $this->addReference("utilisateur5",$utilisateur5);

        $utilisateur6 = new Utilisateur();
        $utilisateur6->setAdresse('EQUINOXE 2, 1 bis Av. du 8 Mai 1945, 78280 Guyancourt');
        $utilisateur6->setEmail('ensup@ensup.fr');
        $utilisateur6->setNomEntreprise('ENSUP - Guyancourt');
        $utilisateur6->setSiren('351199492');
        $utilisateur6->setRoles(['ROLE_ECOLE']);
        $utilisateur6->setPassword($this->passwordHasher->hashPassword($utilisateur6, '0000'));
        $utilisateur6->setSiteWeb('ensup.fr');
        $manager->persist($utilisateur6);
        $this->addReference("utilisateur6",$utilisateur6);

        $utilisateur7 = new Utilisateur();
        $utilisateur7->setAdresse('19-22 Bd Saint-Conwoïon, 35000 Rennes');
        $utilisateur7->setEmail('epita.rennes@epita.fr');
        $utilisateur7->setNomEntreprise('EPITA - Rennes');
        $utilisateur7->setSiren('443220223');
        $utilisateur7->setRoles(['ROLE_ECOLE']);
        $utilisateur7->setPassword($this->passwordHasher->hashPassword($utilisateur7, '0000'));
        $utilisateur7->setSiteWeb('epita.fr');
        $manager->persist($utilisateur7);
        $this->addReference("utilisateur7",$utilisateur7);

        $utilisateur8 = new Utilisateur();
        $utilisateur8->setAdresse('2 Rue Robert dArbrissel, 35065 Rennes');
        $utilisateur8->setEmail('RSB@rennesshoolbusiness.fr');
        $utilisateur8->setNomEntreprise('Rennes School Business - Rennes');
        $utilisateur8->setSiren('378327514');
        $utilisateur8->setRoles(['ROLE_ECOLE']);
        $utilisateur8->setPassword($this->passwordHasher->hashPassword($utilisateur8, '0000'));
        $utilisateur8->setSiteWeb('www.rennes-sb.fr/');
        $manager->persist($utilisateur8);
        $this->addReference("utilisateur8",$utilisateur8);

        $utilisateur9 = new Utilisateur();
        $utilisateur9->setAdresse('Av. de la Boulaie, 35510 Cesson-Sévigné');
        $utilisateur9->setEmail('centralesupelec.rennes@centralesupelec.fr');
        $utilisateur9->setNomEntreprise('CentraleSupélec - Campus de Rennes');
        $utilisateur9->setSiren('130020761');
        $utilisateur9->setRoles(['ROLE_ECOLE']);
        $utilisateur9->setPassword($this->passwordHasher->hashPassword($utilisateur9, '0000'));
        $utilisateur9->setSiteWeb('www.centralesupelec.fr/');
        $manager->persist($utilisateur9);
        $this->addReference("utilisateur9",$utilisateur9);

        $utilisateur10 = new Utilisateur();
        $utilisateur10->setAdresse('30-32 Av. de la République, 94800 Paris');
        $utilisateur10->setEmail('efrei.paris@efrei.fr');
        $utilisateur10->setNomEntreprise('EFREI - Campus de Paris');
        $utilisateur10->setSiren('398898338');
        $utilisateur10->setRoles(['ROLE_ECOLE']);
        $utilisateur10->setPassword($this->passwordHasher->hashPassword($utilisateur10, '0000'));
        $utilisateur10->setSiteWeb('www.efrei.fr/');
        $manager->persist($utilisateur10);
        $this->addReference("utilisateur10",$utilisateur10);

        $manager->flush();
    }

}