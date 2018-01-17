<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller
{
    /**
     * @Route("/cliente", name="cliente")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('Page/cliente.html.twig');
    }
}
