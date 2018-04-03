<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductoController extends Controller
{
    /**
     * @Route("/producto", name="producto")
     */
    public function index()
    {
        return $this->render('Page/productos.html.twig');
    }
}
