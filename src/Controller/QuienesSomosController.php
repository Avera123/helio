<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class QuienesSomosController extends Controller
{
    /**
     * @Route("/quienes-somos", name="quienes_somos")
     */
    public function index()
    {
        return $this->render('Page/quienesSomos.html.twig');
    }
}
