<?php
/**
 * Created by PhpStorm.
 * User: jaoue
 * Date: 16/06/2018
 * Time: 21:56
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JimprimeController extends Controller
{
    /**
     * @Route("/jimprime-en-3d")
     * @return Response
     */
    public function contact() : Response
    {
        return $this->render('jimprime/jimprime.html.twig');

    }

}