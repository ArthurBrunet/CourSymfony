<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PresentationController extends AbstractController
{
    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {
        $prenoms = ["AZEDFAZFZAF" => 10,"test" => 25,"dza" => 12,"vez" => 18,"eza" => 85,"fds" => 1596,];
        $nom = "Brunet";
        $adresse = "51 du pont 75000";
        return $this->render('presentation/presentation.html.twig', [
            'prenoms' => $prenoms,
            'nom' => $nom,
            'adresse' => $adresse,
        ]);
    }

    /**
     * @Route("/cv/{ecole}", name="cv", requirements={})
     */
    public function cv(string $ecole = "ecole" )
    {
        return $this->render('presentation/cv.html.twig', [
            'ecole' => $ecole,
        ]);
    }

    /**
     * @Route("/nfactory", name="nfactory")
     */
    public function nfactory()
    {
        return $this->render('presentation/nfactory.html.twig', [
            'controller_name' => 'NFACTORY',
        ]);
    }

    /**
     * @Route("/age", name="age")
     */
    public function age()
    {
        $response = new Response();
        $response->setContent(23);
        $response->setStatusCode(Response::HTTP_OK);
        return $response;
    }
}
