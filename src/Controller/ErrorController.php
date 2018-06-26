<?php
/**
 * Created by PhpStorm.
 * User: jaoue
 * Date: 16/06/2018
 * Time: 16:35
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErrorController extends Controller
{
    /**
     * @Route("/not-found")
     * @return Response
     */
    public function notFound() : Response
    {
        throw $this->createNotFoundException("Test de la page 404");

    }

    /**
     * Génére automatique une erreur 500
     *
     * @Route("/erreur-interne")
     * @return Response
     * @throws \Exception
     */
    public function internalError() : Response
    {
        throw new \Exception ("Test de la page 500");
    }

}