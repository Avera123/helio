<?php
/**
 * Created by PhpStorm.
 * User: avera
 * Date: 9/01/18
 * Time: 03:14 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactoController extends Controller
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function index(){
        return $this->render('Page/indexPage.html.twig');
    }

    public function createFormContacto(){
        $form = $this->createForm ();
    }
}