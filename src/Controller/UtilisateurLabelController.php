<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/utilisateurlabel")
 */
class UtilisateurLabelController extends AbstractController
{

    /**
     * @Route("/classement", name="classement")
     *
     * @return Response
     */
    public function classement(UtilisateurRepository $utilisateurRepository) {

        $utilisateurs = $utilisateurRepository->findAll();

        return $this->render( 'utilisateurlabel/classement.html.twig', [
            'utilisateurs' => $utilisateurs
        ]);
    }

}