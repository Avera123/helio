<?php
/**
 * Created by PhpStorm.
 * User: avera
 * Date: 2/01/18
 * Time: 01:40 PM
 */

namespace App\Controller;
//
//use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    /**
     * @Route("/")
     */
    public function index(){

        return $this->render('Page/indexPage.html.twig');
    }

    /**
     * @Route("/about")
     */
    public function about(){

        return $this->render('Page/indexPage.html.twig');
    }
}