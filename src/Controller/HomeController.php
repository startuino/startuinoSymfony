<?php
/**
 * Created by PhpStorm.
 * User: jaoue
 * Date: 16/06/2018
 * Time: 00:15
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller

{

    /**
     * @Route("/")
     * @return Response
     *
     */
    public function index() : Response
    {
        return $this->render('accueil/index.html.twig',
            [
                'variableIndex' => "avec la class Controller sans l'environnement Twig",
            ]);
    }


    /**
     * @Route("/about")
     * @return Response
     */
    public function about() : Response
    {
        return $this->render('presentation/about.html.twig',
            [
                'variableAbout' => "avec la class Controller sans l'environnement Twig",
            ]);
    }

}