<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommitController extends Controller
{
    /**
     * @Route("/commit", name="commitSoga")
     */
    public function index()
    {
        $serviceUrl = "https://api.github.com/repos/SogaApp/vanadio/commits";//url listado de commits
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $serviceUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'User-Agent: SogaApp',
        ));

        $resp = json_decode(curl_exec($ch), true);

        for ($i = 0; $i < count($resp); $i++) {
            if (substr($resp[$i]['commit']['message'], 0, 5) == 'Merge') {
                unset($resp[$i]);
            }
        }

        curl_close($ch);

        return $this->render('Page/commits.html.twig', array(
            'commits' => isset($resp) ? array_slice($resp, 0, 10) : null
        ));
    }
}
