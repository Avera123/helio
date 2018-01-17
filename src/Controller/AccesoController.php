<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AccesoController extends Controller
{
    /**
     * @Route("/acceso", name="acceso")
     */
    public function index()
    {
        return $this->render('Page/acceso.html.twig');
    }
}
