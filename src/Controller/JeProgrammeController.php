<?php
/**
 * Created by PhpStorm.
 * User: jaoue
 * Date: 16/06/2018
 * Time: 21:54
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeProgrammeController extends Controller
{
    /**
     * @Route("/je-programme")
     * @return Response
     */
    public function contact() : Response
    {
        return $this->render('jeprogramme/jeprogramme.html.twig');

    }

}